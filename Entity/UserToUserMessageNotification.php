<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserToUserMessageNotificationRepository")
 */
class UserToUserMessageNotification extends Notification
{
    /**
     * @ORM\ManyToOne(targetEntity="Message")
     */
    private $message;

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }

    /**
     * @param Message $message
     * @return self
     */
    public function setMessage($message): self
    {
        $this->message = $message;
        return $this;
    }
}
