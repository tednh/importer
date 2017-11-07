<?php

namespace Pressware\AwesomeSupport\API\Repository;

class HistoryRepository extends Repository
{
    /**
     * Create a historical item model and store into the repository, keyed by the ticket ID.
     *
     * @since 0.1.0
     *
     * @param int|string $ticketId
     * @param int $userId
     * @param string $status
     * @param string $timestamp
     *
     * @return void
     */
    public function create($ticketId, $userId, $status, $timestamp)
    {
        if (!$this->has($ticketId)) {
            $this->set($ticketId, []);
        }

        $this->items[$ticketId][] = [
            'user'  => (int)$userId,
            'value' => $status,
            'date'  => $timestamp,
        ];
    }
}
