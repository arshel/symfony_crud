<?php

namespace App\Entity;
use App\Repository\ExampleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * ExampleLocations
 *
 * @ORM\Table(name="example_locations")
 * @ORM\Entity
 */
class ExampleLocations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_name", type="string", length=13, nullable=true)
     */
    private $companyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street", type="string", length=28, nullable=true)
     */
    private $street;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street_number", type="string", length=5, nullable=true)
     */
    private $streetNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="postal_code", type="integer", nullable=true)
     */
    private $postalCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=45, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude", type="string", length=10, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude", type="string", length=9, nullable=true)
     */
    private $longitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=35, nullable=true)
     */
    private $email;

    public function getId()
    {
        return $this->id;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getlongitude()
    {
        return $this->longitude;
    }


    public function getemail()
    {
        return $this->email;
    }
}
