<?php

namespace Loevgaard\DandomainFoundationBundle\Entity;

use Loevgaard\DandomainFoundation\Entity\Generated\TagInterface;

/**
 * @method null|TagInterface find($id)
 * @method TagInterface[] findBy(array $criteria, array $orderBy = null, int $limit = null, int $offset = null)
 * @method null|TagInterface findOneBy(array $criteria)
 * @method TagInterface[] findAll()
 * @method persist($object)
 * @method flush()
 * @method clear()
 * @method remove($object)
 */
class TagRepository extends Repository implements TagRepositoryInterface
{

}
