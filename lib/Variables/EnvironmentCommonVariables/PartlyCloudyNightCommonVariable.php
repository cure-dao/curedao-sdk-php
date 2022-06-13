<?php
namespace CureDAO\Client\Variables\EnvironmentCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\EnvironmentVariableCategory;
use CureDAO\Client\Units\CountUnit;
class PartlyCloudyNightCommonVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const COMBINATION_OPERATION = 'SUM';
	public const DEFAULT_UNIT_ID = CountUnit::ID;
	public const CREATOR_USER_ID = 0;
	public const DURATION_OF_ACTION = 604800;
	public const FILLING_VALUE = 0.0;
	public const ID = 5965402;
	public const IMAGE_URL = ImageUrls::ESSENTIAL_COLLECTION_CLOUD;
	public const MANUAL_TRACKING = false;
	public const NAME = 'Partly Cloudy-night';
	public const ONSET_DELAY = 0;
	public const OUTCOME = false;
	public const PRICE = 47.899999999999999;
	public const PRODUCT_URL = 'https://www.amazon.com/JanSport-Student-Backpack-Colors-Partly/dp/B072HWG8LS?psc=1&SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B072HWG8L';
	public const PUBLIC = true;
	public const SYNONYMS = ['Partly Cloudy-night'];
	public const VARIABLE_CATEGORY_ID = EnvironmentVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;

	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $creatorUserId = self::CREATOR_USER_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $fillingValue = self::FILLING_VALUE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $manualTracking = self::MANUAL_TRACKING;
	public $name = self::NAME;
	public $onsetDelay = self::ONSET_DELAY;
	public $outcome = self::OUTCOME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
