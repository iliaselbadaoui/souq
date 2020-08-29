<?php
    class Product
    {
        private $id;
        private $name;
        private $price;
        private $reference;
        private $description;
        private $photo;
        private $quantity;

        /**
         * Product constructor.
         * @param $id
         * @param $name
         * @param $price
         * @param $reference
         * @param $description
         * @param $photo
         * @param $quantity
         */
        public function __construct($id, $name, $price, $reference, $description, $photo, $quantity)
        {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->reference = $reference;
            $this->description = $description;
            $this->photo = $photo;
            $this->quantity = $quantity;
        }

        /**
         * @return mixed
         */
        public function getPhoto()
        {
            return $this->photo;
        }

        /**
         * @param mixed $photo
         */
        public function setPhoto($photo)
        {
            $this->photo = $photo;
        }


        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

        /**
         * @param mixed $price
         */
        public function setPrice($price)
        {
            $this->price = $price;
        }

        /**
         * @return mixed
         */
        public function getReference()
        {
            return $this->reference;
        }

        /**
         * @param mixed $reference
         */
        public function setReference($reference)
        {
            $this->reference = $reference;
        }

        /**
         * @return mixed
         */
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * @param mixed $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
        }

        /**
         * @return mixed
         */
        public function getQuantity()
        {
            return $this->quantity;
        }

        /**
         * @param mixed $quantity
         */
        public function setQuantity($quantity)
        {
            $this->quantity = $quantity;
        }


    }
    