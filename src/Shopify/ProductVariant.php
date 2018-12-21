<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

class ProductVariant extends BaseType
{

    use CountTrait;

    /** @see BaseType::$path */
    protected $path = 'variants';

    /** @var string */
    public $barcode;

    /** @var string */
    public $compare_at_price;

    /** @var string */
    public $created_at;

    /** @var string */
    public $fulfillment_service;

    /** @var int */
    public $grams;

    /** @var int|string */
    public $image_id;

    /** @var int|string */
    public $inventory_item_id;

    /** @var string */
    public $inventory_management;

    /** @var string */
    public $inventory_policy;

    /** @var int */
    public $inventory_quantity;

    /** @var int */
    public $old_inventory_quantity;

    /** @var int */
    public $inventory_quantity_adjustment;

    /** @var array */
    public $metafields;

    /** @var string */
    public $option;

    /** @var array */
    public $presentment_prices;

    /** @var int */
    public $position;

    /** @var float|string */
    public $price;

    /** @var int|string */
    public $product_id;

    /** @var bool */
    public $requires_shipping;

    /** @var string */
    public $sku;

    /** @var bool */
    public $taxable;

    /** @var string */
    public $tax_code;

    /** @var string */
    public $title;

    /** @var string */
    public $updated_at;

    /** @var int */
    public $weight;

    /** @var string */
    public $weight_unit;

    /**
     * @param null|int $id
     * @param string ...$extra
     * @return string
     * @throws MissingPropertyException
     */
    protected function getEndpoint($id = null, string ...$extra)
    {
        if (!$this->product_id) {
            throw new MissingPropertyException('You must provide a product_id to use ProductVariant API.');
        }

        $paths = array_merge(
            ['/admin/products', $this->product_id, 'variants', $this->id ?: $id],
            $extra
        );

        return implode('/', array_filter($paths, 'strlen')).'.json';
    }

    /**
     * @param string $barcode
     * @return ProductVariant
     */
    public function barcode(string $barcode): ProductVariant
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @param string $compare_at_price
     * @return ProductVariant
     */
    public function compareAtPrice(string $compare_at_price): ProductVariant
    {
        $this->compare_at_price = $compare_at_price;

        return $this;
    }

    /**
     * @param string $created_at
     * @return ProductVariant
     */
    public function createdAt(string $created_at): ProductVariant
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @param string $fulfillment_service
     * @return ProductVariant
     */
    public function fulfillmentService(string $fulfillment_service): ProductVariant
    {
        $this->fulfillment_service = $fulfillment_service;

        return $this;
    }

    /**
     * @param int $grams
     * @return ProductVariant
     */
    public function grams(int $grams): ProductVariant
    {
        $this->grams = $grams;

        return $this;
    }

    /**
     * @param int|string $image_id
     * @return ProductVariant
     */
    public function imageId($image_id)
    {
        $this->image_id = $image_id;

        return $this;
    }

    /**
     * @param int|string $inventory_item_id
     * @return ProductVariant
     */
    public function inventoryItemId($inventory_item_id)
    {
        $this->inventory_item_id = $inventory_item_id;

        return $this;
    }

    /**
     * @param string $inventory_management
     * @return ProductVariant
     */
    public function inventoryManagement(string $inventory_management): ProductVariant
    {
        $this->inventory_management = $inventory_management;

        return $this;
    }

    /**
     * @param string $inventory_policy
     * @return ProductVariant
     */
    public function inventoryPolicy(string $inventory_policy): ProductVariant
    {
        $this->inventory_policy = $inventory_policy;

        return $this;
    }

    /**
     * @param int $old_inventory_quantity
     * @return ProductVariant
     */
    public function oldInventoryQuantity(int $old_inventory_quantity): ProductVariant
    {
        $this->old_inventory_quantity = $old_inventory_quantity;

        return $this;
    }

    /**
     * @param int $inventory_quantity_adjustment
     * @return ProductVariant
     */
    public function inventoryQuantityAdjustment(int $inventory_quantity_adjustment): ProductVariant
    {
        $this->inventory_quantity_adjustment = $inventory_quantity_adjustment;

        return $this;
    }

    /**
     * @param array $metafields
     * @return ProductVariant
     */
    public function metafields(array $metafields): ProductVariant
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * @param string $option
     * @return ProductVariant
     */
    public function option(string $option): ProductVariant
    {
        $this->option = $option;

        return $this;
    }

    /**
     * @param array $presentment_prices
     * @return ProductVariant
     */
    public function presentmentPrices(array $presentment_prices): ProductVariant
    {
        $this->presentment_prices = $presentment_prices;

        return $this;
    }

    /**
     * @param int $position
     * @return ProductVariant
     */
    public function position(int $position): ProductVariant
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @param float|string $price
     * @return ProductVariant
     */
    public function price($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param int|string $product_id
     * @return ProductVariant
     */
    public function productId($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * @param bool $requires_shipping
     * @return ProductVariant
     */
    public function requiresShipping(bool $requires_shipping): ProductVariant
    {
        $this->requires_shipping = $requires_shipping;

        return $this;
    }

    /**
     * @param string $sku
     * @return ProductVariant
     */
    public function sku(string $sku): ProductVariant
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param bool $taxable
     * @return ProductVariant
     */
    public function taxable(bool $taxable): ProductVariant
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * @param string $tax_code
     * @return ProductVariant
     */
    public function taxCode(string $tax_code): ProductVariant
    {
        $this->tax_code = $tax_code;

        return $this;
    }

    /**
     * @param string $title
     * @return ProductVariant
     */
    public function title(string $title): ProductVariant
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $updated_at
     * @return ProductVariant
     */
    public function updatedAt(string $updated_at): ProductVariant
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @param int $weight
     * @return ProductVariant
     */
    public function weight(int $weight): ProductVariant
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @param string $weight_unit
     * @return ProductVariant
     */
    public function weightUnit(string $weight_unit): ProductVariant
    {
        $this->weight_unit = $weight_unit;

        return $this;
    }
}
