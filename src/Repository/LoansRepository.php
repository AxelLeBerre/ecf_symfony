<?php

namespace App\Repository;

use App\Entity\Loans;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Loans>
 */
class LoansRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Loans::class);
    }

    /**
     * Récupérer les prêts pour un utilisateur spécifique.
     *
     * @param int $userId L'ID de l'utilisateur.
     * @return Loans[] Retourne une liste de prêts pour un utilisateur.
     */
    public function findByUser(int $userId): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.user = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('l.dateEmprunt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer les prêts pour un livre spécifique.
     *
     * @param int $bookId L'ID du livre.
     * @return Loans[] Retourne une liste de prêts pour un livre.
     */
    public function findByBook(int $bookId): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.book = :bookId')
            ->setParameter('bookId', $bookId)
            ->orderBy('l.dateEmprunt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer tous les prêts.
     *
     * @return Loans[] Retourne tous les prêts enregistrés.
     */
    public function findAllLoans(): array
    {
        return $this->createQueryBuilder('l')
            ->orderBy('l.dateEmprunt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer un prêt en particulier en fonction de l'ID.
     *
     * @param int $id L'ID du prêt.
     * @return Loans|null Retourne un prêt ou null si non trouvé.
     */
    public function findOneById(int $id): ?Loans
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
