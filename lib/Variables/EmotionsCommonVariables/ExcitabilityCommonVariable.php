<?php
namespace CureDAO\Client\Variables\EmotionsCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\EmotionsVariableCategory;
use CureDAO\Client\Units\OneToFiveRatingUnit;
class ExcitabilityCommonVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = OneToFiveRatingUnit::ID;
	public const DEFAULT_VALUE = 1.0;
	public const DESCRIPTION = 'If you describe someone as excitable, you mean that they behave in a nervous way and become excited very easily.';
	public const ID = 1308;
	public const IMAGE_URL = ImageUrls::EMOTICON_SET_JOYFUL_2;
	public const NAME = 'Excitability';
	public const PRICE = 13.5;
	public const PRODUCT_URL = 'https://www.amazon.com/Excitability-American-Literature-Dalkey-Archive/dp/1564781976?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=1564781';
	public const SYNONYMS = ['Excitability'];
	public const VALENCE = 'positive';
	public const VARIABLE_CATEGORY_ID = EmotionsVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $defaultValue = self::DEFAULT_VALUE;
	public $description = self::DESCRIPTION;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $synonyms = self::SYNONYMS;
	public $valence = self::VALENCE;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}