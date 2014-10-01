<?php

namespace Chileplaner\ChileplanerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Chileplaner\ChileplanerBundle\Entity\Events;
use Chileplaner\ChileplanerBundle\Form\EventsType;

use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Events controller.
 *
 * @Route("/events")
 */
class EventsController extends Controller
{
	
	/**
	 * Provides events as json for fullcalendar
	 * @Route("/json", name="events_json")
	 */
	public function jsonAction(Request $request){
		$start = new DateTime($request->get('start'));
		$end = new DateTime($request->get('end'));
		
        $rep = $this->getDoctrine()->getManager()->getRepository('ChileplanerChileplanerBundle:Events');

		$query = $repository->createQuery(
			'SELECT e
			FROM ChileplanerChileplanerBundle:Events e
			WHERE e.start >= :start
			AND e.end <= :end'
		)
		->setParameter('start', $start->format('Y-m-d H:i:s'))
		->setParameter('end', $end->format('Y-m-d H:i:s'));
		
		$result = $query->getResult();
		$data = array();
		foreach($result as $row){
			$eventObj = new StdClass();
			$eventObj->id = $row->id;
			$eventObj->title = $row->title;
			$eventObj->start = $row->start;
			$eventObj->end = $row->end;
			$data[] = $eventObj;
		}
		
		return new JsonResponse($data);
	}
	
	/**
	 * Renders the Fullcalendar View
	 * @Route("/calendar", name="events_calendar"
	 * @Template("ChileplanerChileplanerBundle:Events:calendar.html.twig")
	 */
	public function calendarAction(){
		return array();
	}
	
    /**
     * Lists all Events entities.
     *
     * @Route("/", name="events")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ChileplanerChileplanerBundle:Events')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Events entity.
     *
     * @Route("/", name="events_create")
     * @Method("POST")
     * @Template("ChileplanerChileplanerBundle:Events:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Events();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('events_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Events entity.
     *
     * @param Events $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Events $entity)
    {
        $form = $this->createForm(new EventsType(), $entity, array(
            'action' => $this->generateUrl('events_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Events entity.
     *
     * @Route("/new", name="events_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Events();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Events entity.
     *
     * @Route("/{id}", name="events_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChileplanerChileplanerBundle:Events')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Events entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Events entity.
     *
     * @Route("/{id}/edit", name="events_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChileplanerChileplanerBundle:Events')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Events entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Events entity.
    *
    * @param Events $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Events $entity)
    {
        $form = $this->createForm(new EventsType(), $entity, array(
            'action' => $this->generateUrl('events_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Events entity.
     *
     * @Route("/{id}", name="events_update")
     * @Method("PUT")
     * @Template("ChileplanerChileplanerBundle:Events:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChileplanerChileplanerBundle:Events')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Events entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('events_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Events entity.
     *
     * @Route("/{id}", name="events_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ChileplanerChileplanerBundle:Events')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Events entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('events'));
    }

    /**
     * Creates a form to delete a Events entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('events_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
