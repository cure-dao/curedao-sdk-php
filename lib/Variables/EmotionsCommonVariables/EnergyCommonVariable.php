<?php
namespace CureDAO\Client\Variables\EmotionsCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\EmotionsVariableCategory;
use CureDAO\Client\Units\OneToFiveRatingUnit;
class EnergyCommonVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const COMBINATION_OPERATION = 'MEAN';
	public const DEFAULT_UNIT_ID = OneToFiveRatingUnit::ID;
	public const CREATOR_USER_ID = 7;
	public const DEFAULT_VALUE = 3.0;
	public const DURATION_OF_ACTION = 86400;
	public const ID = 1306;
	public const IMAGE_URL = ImageUrls::EMOTICON_SET_SUPERHERO;
	public const MANUAL_TRACKING = true;
	public const NAME = 'Energy';
	public const ONSET_DELAY = 0;
	public const OUTCOME = true;
	public const PRICE = 18.969999999999999;
	public const PRODUCT_URL = 'https://www.amazon.com/Caffeine-L-Theanine-Smooth-Energy-Focus/dp/B01921TUGC?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B01921TUGC';
	public const PUBLIC = true;
	public const SYNONYMS = ['Energy'];
	public const VALENCE = 'positive';
	public const VARIABLE_CATEGORY_ID = EmotionsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $creatorUserId = self::CREATOR_USER_ID;
	public $defaultValue = self::DEFAULT_VALUE;
	public $durationOfAction = self::DURATION_OF_ACTION;
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
	public $valence = self::VALENCE;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
