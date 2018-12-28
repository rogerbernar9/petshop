<?php

namespace App\Repository;

use App\Entity\Cliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use PDO;

/**
 * @method Cliente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cliente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cliente[]    findAll()
 * @method Cliente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClienteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cliente::class);
    }

    // /**
    //  * @return Cliente[] Returns an array of Cliente objects
    //  */
    
    public function qtdAnimaisPorCliente()
    {
        $sql = "select count(ac.animal_id) as qtde,
                c.nome from animal_cliente ac join cliente c
                on c.id = ac.cliente_id
                group by c.nome";

        return $this->getEntityManager()->getConnection()->executeQuery($sql)
            ->fetchAll(PDO::FETCH_OBJ);
        
    }
    

    /*
    public function findOneBySomeField($value): ?Cliente
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
