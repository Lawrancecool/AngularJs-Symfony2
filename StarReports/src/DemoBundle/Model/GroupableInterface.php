<?php

/**
 * Created by PhpStorm.
 * User: lawrance
 * Date: 2/6/16
 * Time: 1:14 PM
 */

namespace DemoBundle\Model;


interface GroupableInterface
{
    /**
     * Gets the groups granted to the user.
     *
     * @return \Traversable
     */
    public function getGroups();

    /**
     * Gets the name of the groups which includes the user.
     *
     * @return array
     */
    public function getGroupNames();

    /**
     * Indicates whether the user belongs to the specified group or not.
     *
     * @param string $name Name of the group
     *
     * @return Boolean
     */
    public function hasGroup($name);

    /**
     * Add a group to the user groups.
     *
     * @param GroupInterface $group
     *
     * @return self
     */
    public function addGroup(GroupInterface $group);

    /**
     * Remove a group from the user groups.
     *
     * @param GroupInterface $group
     *
     * @return self
     */
    public function removeGroup(GroupInterface $group);
}
