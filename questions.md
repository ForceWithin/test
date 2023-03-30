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
9. What is Serializer in Symfony?
10. How many cache adapters are present in Symfony?
11. Fix me:
```
class Task
{
    protected $description;
    protected $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getTags()
    {
        return $this->tags;
    }
}
class Tag
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
class TagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tag::class,
        ]);
    }
}
class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('description');

        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
class TaskController extends Controller
{
    public function newAction(Request $request)
    {
        $task = new Task();

        // dummy code - add some example tags to the task
        // (otherwise, the template will render an empty list of tags)
        $tag1 = new Tag();
        $tag1->setName('tag1');
        $task->getTags()->add($tag1);
        $tag2 = new Tag();
        $tag2->setName('tag2');
        $task->getTags()->add($tag2);
        // end dummy code

        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ... do your form processing, like saving the Task and Tag entities
        }

        return $this->render('task/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
{{ form_start(form) }}
    {{ form_row(form.description) }}

    <h3>Tags</h3>
    <ul class="tags">
        {% for tag in form.tags %}
            <li>{{ form_row(tag.name) }}</li>
        {% endfor %}
    </ul>
{{ form_end(form) }}

```
12. In Git there is lot's of changes in you pr and now you are free to merge it - how will you do it?
13. Git what does git --ammend
