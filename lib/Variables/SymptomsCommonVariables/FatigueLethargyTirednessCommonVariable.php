<?php
namespace CureDAO\Client\Variables\SymptomsCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\SymptomsVariableCategory;
use CureDAO\Client\Units\OneToFiveRatingUnit;
class FatigueLethargyTirednessCommonVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const COMBINATION_OPERATION = 'MEAN';
	public const DEFAULT_UNIT_ID = OneToFiveRatingUnit::ID;
	public const CREATOR_USER_ID = 7;
	public const DURATION_OF_ACTION = 86400;
	public const ID = 88878;
	public const IMAGE_URL = ImageUrls::ACTIVITIES_SLEEP;
	public const MANUAL_TRACKING = true;
	public const NAME = 'Fatigue / Lethargy / Tiredness';
	public const ONSET_DELAY = 0;
	public const OUTCOME = true;
	public const PRICE = 49.990000000000002;
	public const PRODUCT_URL = 'https://www.amazon.com/Revs-Reflexology-Massaging-Circulation-Arthritis/dp/B016WCJ7FS?psc=1&SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=';
	public const PUBLIC = true;
	public const SYNONYMS = [
    'Fatigue',
    'Lethargy / Tiredness',
    'Fatigue / Lethargy / Tiredness',
    'Lethargy / Tirednes',
    'Fatigue / Lethargy / Tirednes',
    'Lethargy / Tiredne',
    'Fatigue / Lethargy / Tiredne',
];
	public const VARIABLE_CATEGORY_ID = SymptomsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $creatorUserId = self::CREATOR_USER_ID;
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
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
