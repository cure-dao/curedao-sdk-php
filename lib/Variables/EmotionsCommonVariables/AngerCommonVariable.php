<?php
namespace CureDAO\Client\Variables\EmotionsCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\EmotionsVariableCategory;
use CureDAO\Client\Units\OneToFiveRatingUnit;
class AngerCommonVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const COMBINATION_OPERATION = 'MEAN';
	public const DEFAULT_UNIT_ID = OneToFiveRatingUnit::ID;
	public const CREATOR_USER_ID = 7;
	public const DURATION_OF_ACTION = 86400;
	public const ID = 86779;
	public const IMAGE_URL = ImageUrls::EMOTICON_SET_ANGRY;
	public const ION_ICON = 'ion-sad-outline';
	public const MANUAL_TRACKING = true;
	public const NAME = 'Anger';
	public const ONSET_DELAY = 0;
	public const OUTCOME = true;
	public const PRICE = 16.0;
	public const PRODUCT_URL = 'https://www.amazon.com/Anger-Cooling-Thich-Nhat-Hanh/dp/1573229377?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=1573229377';
	public const PUBLIC = true;
	public const SYNONYMS = ['Anger'];
	public const VALENCE = 'negative';
	public const VARIABLE_CATEGORY_ID = EmotionsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $creatorUserId = self::CREATOR_USER_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $ionIcon = self::ION_ICON;
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
