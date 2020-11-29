<?php

namespace App\Traits;

use Carbon\Carbon;
use App\Events\NewMessageDispatched;
use App\Events\NewReplyDispatched;
use App\Models\Thread;
use App\Models\Participant;

trait HasInbox
{
    protected $subject, $message;
    protected $recipients = [];

    public function subject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    public function writes($message)
    {
        $this->message = $message;

        return $this;
    }

    public function to($users)
    {
        if (is_array($users)) {
            $this->recipients = array_merge($this->recipients, $users);
        } else {
            $this->recipients[] = $users;
        }

        return $this;
    }


    /**
     * Send new message
     *
     * @return mixed
     */
    public function send()
    {
        $thread = $this->threads()->create([
            'subject' => $this->subject,
        ]);

        // Message
        $message = $thread->messages()->create([
            'user_id' => $this->id,
            'body' => $this->message
        ]);

        // Sender
        Participant::create([
            'user_id' => $this->id,
            'thread_id' => $thread->id,
            'seen_at' => Carbon::now()
        ]);

        if (count($this->recipients)) {
            $thread->addParticipants($this->recipients);
        }

        if ($thread) {
            event(new NewMessageDispatched($thread, $message));
        }

        return $thread;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Thread $thread
     *
     * @return \Illuminate\Http\Response
     */
    public function reply($thread)
    {
        if ( ! is_object($thread)) {
            $thread = Thread::whereId($thread)->firstOrFail();
        }

        $thread->activateAllParticipants();

        $message = $thread->messages()->create([
            'user_id' => $this->id,
            'body' => $this->message
        ]);

        // Add replier as a participant
        $participant = Participant::firstOrCreate([
            'thread_id' => $thread->id,
            'user_id' => $this->id
        ]);

        $participant->seen_at = Carbon::now();
        $participant->save();

        $thread->updated_at = Carbon::now();
        $thread->save();

        event(new NewReplyDispatched($thread, $message));

        return $message;
    }

    /**
     * Get user threads
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

    /**
     *
     * @param bool $withTrashed
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function participated($withTrashed = false)
    {
        $query = $this->belongsToMany(Thread::class, 'participants', 'user_id', 'thread_id')
                      ->withPivot('seen_at')
                      ->withTimestamps();

        if ( ! $withTrashed) {
            $query->whereNull('participants.deleted_at');
        }

        return $query;
    }

    /**
     * Get the threads that have been sent to the user.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function received()
    {
        // todo: get only the received messages if they got an answer
        return $this->participated()->latest('updated_at');
    }

    /**
     * Get the threads that have been sent by a user.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function sent()
    {
        return $this->participated()
                    ->where('threads.user_id', $this->id)
                    ->latest('updated_at');
    }

    /**
     * Get unread messages
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function unread()
    {
        return $this->received()->whereNull('seen_at');
    }
}
