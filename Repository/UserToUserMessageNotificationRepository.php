<?php
namespace App\Repository;

use App\Entity\UserToUserMessageNotification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserToUserMessageNotificationRepository|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserToUserMessageNotificationRepository|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserToUserMessageNotificationRepository[]    findAll()
 * @method UserToUserMessageNotificationRepository[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserToUserMessageNotificationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserToUserMessageNotification::class);
    }
}