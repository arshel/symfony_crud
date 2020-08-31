<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LocationRepository;
use App\Repository\ExampleRepository;
use App\Entity\Location;
use App\Entity\ExampleLocations;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class LocationController extends AbstractController
{

    private $LocationRepository;
    private $ExampleRepository;

    public function __construct(LocationRepository $locationRepository, ExampleRepository $exampleRepository)
    {
        $this->LocationRepository = $locationRepository;
        $this->ExampleRepository = $exampleRepository;
    }

    /**
     * @Route("/homepage/{slug}")
     */
    public function index($slug){
        return new Response(sprintf(
            'Future page to show the article: "%s"',
            $slug
        ));
    }



    /**
     * @Route("/locations/add", name="add_location", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $firstName = $data['companyName'];
        $lastName = $data['latitude'];
        $email = $data['longitude'];


        if (empty($firstName) || empty($lastName) || empty($email)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        $this->LocationRepository->saveCustomer($firstName, $lastName, $email);

        return new JsonResponse(['status' => 'Customer created!']);
    }


    /**
     * @Route("/locations", name="get_all_customers", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $locations = $this->ExampleRepository->findAll();
        $data = [];

        foreach ($locations as $location) {

            $data[] = [
                'id' => $location->getId(),
                'companyName' => $location->getCompanyName(),
                'street' => $location->getStreet(),
                'streetNumber' => $location->getStreetNumber(),
                'postalCode' => $location->getPostalCode(),
                'city' => $location->getCity(),
                'country' => $location->getCountry(),
                'latitude' => $location->getLatitude(),
                'longitude' => $location->getLongitude(),
                'email' => $location->getemail()
            ];

        }
        return new JsonResponse($data);
    }
}
