<?php

namespace Loevgaard\DandomainFoundationBundle\Model;

interface VariantGroupInterface
{
    /**
     * Get externalId
     *
     * @return integer
     */
    public function getExternalId();

    /**
     * Set externalId
     *
     * @param integer $externalId
     *
     * @return VariantGroupInterface
     */
    public function setExternalId($externalId);

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName();

    /**
     * Set groupName
     *
     * @param string $groupName
     *
     * @return VariantGroupInterface
     */
    public function setGroupName($groupName);

    /**
     * Get headline
     *
     * @return string
     */
    public function getHeadline();

    /**
     * Set headline
     *
     * @param string $headline
     *
     * @return VariantGroupInterface
     */
    public function setHeadline($headline);

    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Add product
     *
     * @param ProductInterface $product
     *
     * @return VariantGroupInterface
     */
    public function addProduct(ProductInterface $product);

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts();

    /**
     * Remove product
     *
     * @param ProductInterface $product
     *
     * @return VariantGroupInterface
     */
    public function removeProduct(ProductInterface $product);

    /**
     * Get siteId
     *
     * @return integer
     */
    public function getSiteId();

    /**
     * Set siteId
     *
     * @param integer $siteId
     *
     * @return VariantGroupInterface
     */
    public function setSiteId($siteId);

    /**
     * Get sortOrder
     *
     * @return integer
     */
    public function getSortOrder();

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return VariantGroupInterface
     */
    public function setSortOrder($sortOrder);

    /**
     * Get variantType
     *
     * @return integer
     */
    public function getVariantType();

    /**
     * Set variantType
     *
     * @param integer $variantType
     *
     * @return VariantGroupInterface
     */
    public function setVariantType($variantType);
}