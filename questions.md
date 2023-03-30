1. Your application behaves different - how will you degug?

2. If you see that code could be refactoed - what will you do?

3. How do you control versions of packages?

4. how do you run project locally ?

5. If Symfony DQL for example says that DATEDIFF function if missing what will you do?

6. how to optimize:
```
namespace Acme\SuperbAppBundle\Entity;

use Symfony\Component\DependencyInjection\Container; 
use Doctrine\ORM\Mapping as ORM;

class Users
{


/**
 * @var integer
 */
private $id;

/**
 * @var string
 */
private $firstName;

/**
 * @var string
 */

/**
 * Get id
 *
 * @return integer 
 */
public function getId()
{
    return $this->id;
}

/**
 * Set firstName
 *
 * @param string $firstName
 * @return Users
 */
public function setFirstName($firstName)
{
    $this->firstName = $firstName;

    return $this;
}

/**
 * Get firstName
 *
 * @return string 
 */
public function getFirstName()
{
    return $this->firstName;
}


function __construct($firstName){

    $this->setFirstName($firstName);

}

function save(){

    $em = $this->getDoctrine()->getManager();
    $em->persist($create);
    $em->flush();
}

}
```
