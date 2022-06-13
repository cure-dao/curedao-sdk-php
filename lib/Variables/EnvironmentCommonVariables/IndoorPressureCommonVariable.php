<?php
namespace CureDAO\Client\Variables\EnvironmentCommonVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Variables\BaseVariable;
class IndoorPressureCommonVariable extends BaseVariable {

	public const COMMON_ALIAS = null;
	public const DEFAULT_UNIT_ID = 213;
	public const DESCRIPTION = null;
	public const DURATION_OF_ACTION = 604800;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	public const ID = 6034985;
	public const IMAGE_URL = null;
	public const INFORMATIONAL_URL = null;
	public const MANUAL_TRACKING = false;
	public const MAXIMUM_ALLOWED_VALUE = 10130;
	public const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = null;
	public const MINIMUM_ALLOWED_VALUE = 101;
	public const NAME = 'Indoor Pressure';
	public const ONSET_DELAY = 0;
	public const OUTCOME = false;
	public const SYNONYMS = ['Indoor', 'Indoor Pressure'];
	public const VARIABLE_CATEGORY_ID = 17;

	public $commonAlias = self::COMMON_ALIAS;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $description = self::DESCRIPTION;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $fillingType = self::FILLING_TYPE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $informationalUrl = self::INFORMATIONAL_URL;
    public $manualTracking = false;
	public $maximumAllowedValue = self::MAXIMUM_ALLOWED_VALUE;
	public $minimumAllowedSecondsBetweenMeasurements = self::MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS;
	public $minimumAllowedValue = self::MINIMUM_ALLOWED_VALUE;
	public $name = self::NAME;
	public $onsetDelay = self::ONSET_DELAY;
	public $outcome = self::OUTCOME;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
