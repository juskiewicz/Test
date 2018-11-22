<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NotificationRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"system" = "SystemNotification", "user_to_user_message" = "UserToUserMessageNotification"})
 */
abstract class Notification
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=50)
     * @Assert\NotBlank()
     * @Assert\Length(min=3)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="description", type="string", length=300)
     * @Assert\NotBlank()
     * @Assert\Length(max=100)
     */
    private $description;

    /**
     * @var \DateTime
     * @ORM\Column(name="send_at", type="datetime")
     * @Assert\NotBlank()
     */
    private $sendAt;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $fromUser;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $toUser;

    /**
     * @var boolean
     * @ORM\Column(name="seen", type="boolean")
     */
    private $seen;

    public function __construct()
    {
        $this->sendAt = new \DateTime();
        $this->seen = false;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param \DateTime $sendAt
     * @return self
     */
    public function setSendAt(\DateTime $sendAt): self
    {
        $this->sendAt = $sendAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSendAt(): \DateTime
    {
        return $this->sendAt;
    }

    /**
     * @return User
     */
    public function getFromUser(): User
    {
        return $this->fromUser;
    }

    /**
     * @param User $fromUser
     * @return self
     */
    public function setFromUser(User $fromUser): self
    {
        $this->fromUser = $fromUser;
        return $this;
    }

    /**
     * @return User
     */
    public function getToUser(): User
    {
        return $this->toUser;
    }

    /**
     * @param User $toUser
     * @return self
     */
    public function setToUser(User $toUser): self
    {
        $this->toUser = $toUser;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeen()
    {
        return $this->seen;
    }

    /**
     * @param bool $seen
     * @return self
     */
    public function setSeen(bool $seen): self
    {
        $this->seen = $seen;
        return $this;
    }
}
