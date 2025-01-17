<?php

/*
 * Clearsale is a Brazilian fraud risk management company operating in the 
 * physical and virtual world, with solutions for e-commerce, credit, 
 * collection and sales recovery.
 * 
 * This package is designed for integration with the ClearSale API
 * 
 * The MIT License
 *
 * Copyright 2019 odesenvolvedor.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace ClearSale;

class PurchaseInformation extends Entity implements \JsonSerializable
{
    /**
     * @var \DateTime
     */
    private $lastDateInsertedMail;

    /**
     * @var \DateTime
     */
    private $lastDateChangePassword;

    /**
     * @var \DateTime
     */
    private $lastDateChangePhone;

    /**
     * @var \DateTime
     */
    private $lastDateChangeMobilePhone;

    /**
     * @var \DateTime
     */
    private $lastDateInsertedAddress;

    /**
     * @var bool
     */
    private $purchaseLogged;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $login;

    public function setLastDateInsertedMail(\DateTime $lastDateInsertedMail) {
        $this->lastDateInsertedMail = $lastDateInsertedMail;
    }

    public function setLastDateChangePassword(\DateTime $lastDateChangePassword) {
        $this->lastDateChangePassword = $lastDateChangePassword;
    }

    public function setLastDateChangePhone(\DateTime $lastDateChangePhone) {
        $this->lastDateChangePhone = $lastDateChangePhone;
    }

    public function setLastDateChangeMobilePhone(\DateTime $lastDateChangeMobilePhone) {
        $this->lastDateChangeMobilePhone = $lastDateChangeMobilePhone;
    }

    public function setLastDateInsertedAddress(\DateTime $lastDateInsertedAddress) {
        $this->lastDateInsertedAddress = $lastDateInsertedAddress;
    }

    public function setPurchaseLogged($purchaseLogged) {
        $this->purchaseLogged = $purchaseLogged;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    /**
     * @return \DateTime
     */
    public function getLastDateInsertedMail()
    {
        return $this->asDateTimeVal($this->lastDateInsertedMail);
    }

    /**
     * @return \DateTime
     */
    public function getLastDateChangePassword()
    {
        return $this->asDateTimeVal($this->lastDateChangePassword);
    }

    /**
     * @return \DateTime
     */
    public function getLastDateChangePhone()
    {
        return $this->asDateTimeVal($this->lastDateChangePhone);
    }

    /**
     * @return \DateTime
     */
    public function getLastDateChangeMobilePhone()
    {
        return $this->asDateTimeVal($this->lastDateChangeMobilePhone);
    }

    /**
     * @return \DateTime
     */
    public function getLastDateInsertedAddress()
    {
        return $this->asDateTimeVal($this->lastDateInsertedAddress);
    }

    /**
     * @return bool
     */
    public function getPurchaseLogged()
    {
        return $this->asBool($this->purchaseLogged);
    }
    
    public function jsonSerialize() {
        $arr = get_object_vars($this);
        foreach ($arr as $k => $v) {
            if (empty($v)) {
                unset ($arr[$k]);
            }
        }
        return $arr;
    }
    
}
