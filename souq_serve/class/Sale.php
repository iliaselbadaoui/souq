<?php


    class Sale
    {
        private $id;
        private $client;
        private $product;

        /**
         * Sale constructor.
         * @param $id
         * @param $client
         * @param $product
         */
        public function __construct($id, $client, $product)
        {
            $this->id = $id;
            $this->client = $client;
            $this->product = $product;
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
        public function getClient()
        {
            return $this->client;
        }

        /**
         * @param mixed $client
         */
        public function setClient($client)
        {
            $this->client = $client;
        }

        /**
         * @return mixed
         */
        public function getProduct()
        {
            return $this->product;
        }

        /**
         * @param mixed $product
         */
        public function setProduct($product)
        {
            $this->product = $product;
        }


    }