<?php

namespace Loevgaard\DandomainFoundationBundle\Model;

/**
 * @deprecated Use Loevgaard\DandomainFoundationBundle\Model\ProductTranslationInterface instead
 */
interface SiteSettingInterface
{
    /**
     * Get customField01
     *
     * @return string
     */
    public function getCustomField01();

    /**
     * Set customField01
     *
     * @param string $customField01
     *
     * @return SiteSettingInterface
     */
    public function setCustomField01($customField01);

    /**
     * Get customField02
     *
     * @return string
     */
    public function getCustomField02();

    /**
     * Set customField02
     *
     * @param string $customField02
     *
     * @return SiteSettingInterface
     */
    public function setCustomField02($customField02);

    /**
     * Get customField03
     *
     * @return string
     */
    public function getCustomField03();

    /**
     * Set customField03
     *
     * @param string $customField03
     *
     * @return SiteSettingInterface
     */
    public function setCustomField03($customField03);

    /**
     * Get customField04
     *
     * @return string
     */
    public function getCustomField04();

    /**
     * Set customField04
     *
     * @param string $customField04
     *
     * @return SiteSettingInterface
     */
    public function setCustomField04($customField04);

    /**
     * Get customField05
     *
     * @return string
     */
    public function getCustomField05();

    /**
     * Set customField05
     *
     * @param string $customField05
     *
     * @return SiteSettingInterface
     */
    public function setCustomField05($customField05);

    /**
     * Get customField06
     *
     * @return string
     */
    public function getCustomField06();

    /**
     * Set customField06
     *
     * @param string $customField06
     *
     * @return SiteSettingInterface
     */
    public function setCustomField06($customField06);

    /**
     * Get customField07
     *
     * @return string
     */
    public function getCustomField07();

    /**
     * Set customField07
     *
     * @param string $customField07
     *
     * @return SiteSettingInterface
     */
    public function setCustomField07($customField07);

    /**
     * Get customField08
     *
     * @return string
     */
    public function getCustomField08();

    /**
     * Set customField08
     *
     * @param string $customField08
     *
     * @return SiteSettingInterface
     */
    public function setCustomField08($customField08);

    /**
     * Get customField09
     *
     * @return string
     */
    public function getCustomField09();

    /**
     * Set customField09
     *
     * @param string $customField09
     *
     * @return SiteSettingInterface
     */
    public function setCustomField09($customField09);

    /**
     * Get customField10
     *
     * @return string
     */
    public function getCustomField10();

    /**
     * Set customField10
     *
     * @param string $customField10
     *
     * @return SiteSettingInterface
     */
    public function setCustomField10($customField10);

    /**
     * Get expectedDeliveryTime
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryTime();

    /**
     * Set expectedDeliveryTime
     *
     * @param \DateTime $expectedDeliveryTime
     *
     * @return SiteSettingInterface
     */
    public function setExpectedDeliveryTime($expectedDeliveryTime);

    /**
     * Get expectedDeliveryTimeNotInStock
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryTimeNotInStock();

    /**
     * Set expectedDeliveryTimeNotInStock
     *
     * @param \DateTime $expectedDeliveryTimeNotInStock
     *
     * @return SiteSettingInterface
     */
    public function setExpectedDeliveryTimeNotInStock($expectedDeliveryTimeNotInStock);

    /**
     * Get giftCertificatePdfBackgroundImage
     *
     * @return string
     */
    public function getGiftCertificatePdfBackgroundImage();

    /**
     * Set giftCertificatePdfBackgroundImage
     *
     * @param string $giftCertificatePdfBackgroundImage
     *
     * @return SiteSettingInterface
     */
    public function setGiftCertificatePdfBackgroundImage($giftCertificatePdfBackgroundImage);

    /**
     * Get hidden
     *
     * @return boolean
     */
    public function getHidden();

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return SiteSettingInterface
     */
    public function setHidden($hidden);

    /**
     * Get hiddenForMobile
     *
     * @return boolean
     */
    public function getHiddenForMobile();

    /**
     * Set hiddenForMobile
     *
     * @param boolean $hiddenForMobile
     *
     * @return SiteSettingInterface
     */
    public function setHiddenForMobile($hiddenForMobile);

    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Get imageAltText
     *
     * @return string
     */
    public function getImageAltText();

    /**
     * Set imageAltText
     *
     * @param string $imageAltText
     *
     * @return SiteSettingInterface
     */
    public function setImageAltText($imageAltText);

    /**
     * Get isToplistHidden
     *
     * @return boolean
     */
    public function getIsToplistHidden();

    /**
     * Set isToplistHidden
     *
     * @param boolean $isToplistHidden
     *
     * @return SiteSettingInterface
     */
    public function setIsToplistHidden($isToplistHidden);

    /**
     * Get keyWords
     *
     * @return string
     */
    public function getKeyWords();

    /**
     * Set keyWords
     *
     * @param string $keyWords
     *
     * @return SiteSettingInterface
     */
    public function setKeyWords($keyWords);

    /**
     * Get longDescription
     *
     * @return string
     */
    public function getLongDescription();

    /**
     * Set longDescription
     *
     * @param string $longDescription
     *
     * @return SiteSettingInterface
     */
    public function setLongDescription($longDescription);

    /**
     * Get longDescription2
     *
     * @return string
     */
    public function getLongDescription2();

    /**
     * Set longDescription2
     *
     * @param string $longDescription2
     *
     * @return SiteSettingInterface
     */
    public function setLongDescription2($longDescription2);

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription();

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return SiteSettingInterface
     */
    public function setMetaDescription($metaDescription);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SiteSettingInterface
     */
    public function setName($name);

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle();

    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     *
     * @return SiteSettingInterface
     */
    public function setPageTitle($pageTitle);

    /**
     * Get periodFrontPage
     *
     * @return PeriodInterface
     */
    public function getPeriodFrontPage();

    /**
     * Set periodFrontPage
     *
     * @param PeriodInterface $periodFrontPage
     *
     * @return SiteSettingInterface
     */
    public function setPeriodFrontPage(PeriodInterface $periodFrontPage = null);

    /**
     * Get periodHidden
     *
     * @return PeriodInterface
     */
    public function getPeriodHidden();

    /**
     * Set periodHidden
     *
     * @param PeriodInterface $periodHidden
     *
     * @return SiteSettingInterface
     */
    public function setPeriodHidden(PeriodInterface $periodHidden = null);

    /**
     * Get periodNew
     *
     * @return PeriodInterface
     */
    public function getPeriodNew();

    /**
     * Set periodNew
     *
     * @param PeriodInterface $periodNew
     *
     * @return SiteSettingInterface
     */
    public function setPeriodNew(PeriodInterface $periodNew = null);

    /**
     * Add product
     *
     * @param ProductInterface $product
     *
     * @return SiteSettingInterface
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
     * @return SiteSettingInterface
     */
    public function removeProduct(ProductInterface $product);

    /**
     * Get rememberToBuyTextHeading
     *
     * @return string
     */
    public function getRememberToBuyTextHeading();

    /**
     * Set rememberToBuyTextHeading
     *
     * @param string $rememberToBuyTextHeading
     *
     * @return SiteSettingInterface
     */
    public function setRememberToBuyTextHeading($rememberToBuyTextHeading);

    /**
     * Get rememberToBuyTextSubheading
     *
     * @return string
     */
    public function getRememberToBuyTextSubheading();

    /**
     * Set rememberToBuyTextSubheading
     *
     * @param string $rememberToBuyTextSubheading
     *
     * @return SiteSettingInterface
     */
    public function setRememberToBuyTextSubheading($rememberToBuyTextSubheading);

    /**
     * Get retailSalesPrice
     *
     * @return string
     */
    public function getRetailSalesPrice();

    /**
     * Set retailSalesPrice
     *
     * @param string $retailSalesPrice
     *
     * @return SiteSettingInterface
     */
    public function setRetailSalesPrice($retailSalesPrice);

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription();

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return SiteSettingInterface
     */
    public function setShortDescription($shortDescription);

    /**
     * Get showAsNew
     *
     * @return boolean
     */
    public function getShowAsNew();

    /**
     * Set showAsNew
     *
     * @param boolean $showAsNew
     *
     * @return SiteSettingInterface
     */
    public function setShowAsNew($showAsNew);

    /**
     * Get showOnFrontPage
     *
     * @return boolean
     */
    public function getShowOnFrontPage();

    /**
     * Set showOnFrontPage
     *
     * @param boolean $showOnFrontPage
     *
     * @return SiteSettingInterface
     */
    public function setShowOnFrontPage($showOnFrontPage);

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
     * @return SiteSettingInterface
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
     * @return SiteSettingInterface
     */
    public function setSortOrder($sortOrder);

    /**
     * Get techDocLink
     *
     * @return string
     */
    public function getTechDocLink();

    /**
     * Set techDocLink
     *
     * @param string $techDocLink
     *
     * @return SiteSettingInterface
     */
    public function setTechDocLink($techDocLink);

    /**
     * Get techDocLink2
     *
     * @return string
     */
    public function getTechDocLink2();

    /**
     * Set techDocLink2
     *
     * @param string $techDocLink2
     *
     * @return SiteSettingInterface
     */
    public function setTechDocLink2($techDocLink2);

    /**
     * Get techDocLink3
     *
     * @return string
     */
    public function getTechDocLink3();

    /**
     * Set techDocLink3
     *
     * @param string $techDocLink3
     *
     * @return SiteSettingInterface
     */
    public function setTechDocLink3($techDocLink3);

    /**
     * Get unit
     *
     * @return UnitInterface
     */
    public function getUnit();

    /**
     * Set unit
     *
     * @param UnitInterface $unit
     *
     * @return SiteSettingInterface
     */
    public function setUnit(UnitInterface $unit = null);

    /**
     * Get unitNumber
     *
     * @return string
     */
    public function getUnitNumber();

    /**
     * Set unitNumber
     *
     * @param string $unitNumber
     *
     * @return SiteSettingInterface
     */
    public function setUnitNumber($unitNumber);

    /**
     * Get urlname
     *
     * @return string
     */
    public function getUrlname();

    /**
     * Set urlname
     *
     * @param string $urlname
     *
     * @return SiteSettingInterface
     */
    public function setUrlname($urlname);
}
