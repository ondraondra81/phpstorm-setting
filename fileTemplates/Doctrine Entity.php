<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};


use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Kdyby\Doctrine\Entities\Attributes\Identifier;


#parse("PHP Class Doc Comment.php")
#end

/**
 * @ORM\Entity
 * @ORM\Table(name="${TABLE}")
 */

class ${NAME}
{

    use Identifier;

    
    
}