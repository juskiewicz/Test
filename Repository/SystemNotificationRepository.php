<?php
namespace App\Repository;

use App\Entity\SystemNotification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SystemNotification|null find($id, $lockMode = null, $lockVersion = null)
 * @method SystemNotification|null findOneBy(array $criteria, array $orderBy = null)
 * @method SystemNotification[]    findAll()
 * @method SystemNotification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SystemNotificationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SystemNotification::class);
    }
}