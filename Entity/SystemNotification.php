<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SystemNotificationRepository")
 */
class SystemNotification extends Notification
{
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Message")
     */
    private $message;

    /**
     * @ORM\Column(name="priority", type="integer")
     * @Assert\Range(min = 0, max = 255)
     */
    private $priority;

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

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;
        return $this;
    }
}
