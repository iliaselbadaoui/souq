<?php

    class Client
    {
        private $id;
        private $name;
        private $last;
        private $email;
        private $pass;
        private $adress;
        private $city;
        private $birth;
        private $phone;

        /**
         * Client constructor.
         * @param $id
         * @param $name
         * @param $last
         * @param $email
         * @param $pass
         * @param $adress
         * @param $city
         * @param $birth
         * @param $phone
         */
        public function __construct($id, $name, $last, $email, $pass, $adress, $city, $birth, $phone)
        {
            $this->id = $id;
            $this->name = $name;
            $this->last = $last;
            $this->email = $email;
            $this->pass = $pass;
            $this->adress = $adress;
            $this->city = $city;
            $this->birth = $birth;
            $this->phone = $phone;
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
        public function getLast()
        {
            return $this->last;
        }

        /**
         * @param mixed $last
         */
        public function setLast($last)
        {
            $this->last = $last;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getPass()
        {
            return $this->pass;
        }

        /**
         * @param mixed $pass
         */
        public function setPass($pass)
        {
            $this->pass = $pass;
        }

        /**
         * @return mixed
         */
        public function getAdress()
        {
            return $this->adress;
        }

        /**
         * @param mixed $adress
         */
        public function setAdress($adress)
        {
            $this->adress = $adress;
        }

        /**
         * @return mixed
         */
        public function getCity()
        {
            return $this->city;
        }

        /**
         * @param mixed $city
         */
        public function setCity($city)
        {
            $this->city = $city;
        }

        /**
         * @return mixed
         */
        public function getBirth()
        {
            return $this->birth;
        }

        /**
         * @param mixed $birth
         */
        public function setBirth($birth)
        {
            $this->birth = $birth;
        }

        /**
         * @return mixed
         */
        public function getPhone()
        {
            return $this->phone;
        }

        /**
         * @param mixed $phone
         */
        public function setPhone($phone)
        {
            $this->phone = $phone;
        }


    }
    