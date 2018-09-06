<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/api_session_login.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: platform.api.session.login
 * error:
 *    error.phone  the phone number format is invalid.
 *
 * Generated from protobuf message <code>platform.ApiSessionLoginRequest</code>
 */
class ApiSessionLoginRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string invitationCode = 1;</code>
     */
    private $invitationCode = '';
    /**
     *does the user allow the platform to share his realname with the site that he is on. 
     *
     * Generated from protobuf field <code>bool allowShareRealname = 2;</code>
     */
    private $allowShareRealname = false;
    /**
     * Generated from protobuf field <code>string siteIdPubkBase64 = 3;</code>
     */
    private $siteIdPubkBase64 = '';

    public function __construct() {
        \GPBMetadata\Platform\ApiSessionLogin::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string invitationCode = 1;</code>
     * @return string
     */
    public function getInvitationCode()
    {
        return $this->invitationCode;
    }

    /**
     * Generated from protobuf field <code>string invitationCode = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInvitationCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->invitationCode = $var;

        return $this;
    }

    /**
     *does the user allow the platform to share his realname with the site that he is on. 
     *
     * Generated from protobuf field <code>bool allowShareRealname = 2;</code>
     * @return bool
     */
    public function getAllowShareRealname()
    {
        return $this->allowShareRealname;
    }

    /**
     *does the user allow the platform to share his realname with the site that he is on. 
     *
     * Generated from protobuf field <code>bool allowShareRealname = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowShareRealname($var)
    {
        GPBUtil::checkBool($var);
        $this->allowShareRealname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string siteIdPubkBase64 = 3;</code>
     * @return string
     */
    public function getSiteIdPubkBase64()
    {
        return $this->siteIdPubkBase64;
    }

    /**
     * Generated from protobuf field <code>string siteIdPubkBase64 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteIdPubkBase64($var)
    {
        GPBUtil::checkString($var, True);
        $this->siteIdPubkBase64 = $var;

        return $this;
    }

}

