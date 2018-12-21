<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

class Product extends BaseType
{

    use CountTrait;

    /** @see BaseType::$path */
    protected $path = 'products';

    public $body_html;
    public $created_at;
    public $handle;
    public $images;
    public $options;
    public $product_type;
    public $published_at;
    public $published_scope;
    public $tags;
    public $template_suffix;
    public $title;
    public $metafields_global_title_tag;
    public $metafields_global_description_tag;
    public $updated_at;
    public $variants;
    public $vendor;

    /**
     * @param mixed $body_html
     * @return Product
     */
    public function bodyHtml(string $body_html)
    {
        $this->body_html = $body_html;

        return $this;
    }

    /**
     * @param mixed $handle
     * @return Product
     */
    public function handle(string $handle)
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * @param mixed $images
     * @return Product
     */
    public function images(array $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param mixed $options
     * @return Product
     */
    public function options(array $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @param mixed $product_type
     * @return Product
     */
    public function productType(string $product_type)
    {
        $this->product_type = $product_type;

        return $this;
    }

    /**
     * @param mixed $published_at
     * @return Product
     */
    public function publishedAt(string $published_at)
    {
        $this->published_at = $published_at;

        return $this;
    }

    /**
     * @param mixed $published_scope
     * @return Product
     */
    public function publishedScope(string $published_scope)
    {
        $this->published_scope = $published_scope;

        return $this;
    }

    /**
     * @param mixed $tags
     * @return Product
     */
    public function tags(string $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @param mixed $template_suffix
     * @return Product
     */
    public function templateSuffix(string $template_suffix)
    {
        $this->template_suffix = $template_suffix;

        return $this;
    }

    /**
     * @param mixed $title
     * @return Product
     */
    public function title(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param mixed $metafields_global_title_tag
     * @return Product
     */
    public function metafieldsGlobalTitleTag(string $metafields_global_title_tag)
    {
        $this->metafields_global_title_tag = $metafields_global_title_tag;

        return $this;
    }

    /**
     * @param mixed $metafields_global_description_tag
     * @return Product
     */
    public function metafieldsGlobalDescriptionTag(string $metafields_global_description_tag)
    {
        $this->metafields_global_description_tag = $metafields_global_description_tag;

        return $this;
    }

    /**
     * @param mixed $updated_at
     * @return Product
     */
    public function updatedAt(string $updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @param mixed $variants
     * @return Product
     */
    public function variants(array $variants)
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * @param mixed $vendor
     * @return Product
     */
    public function vendor(string $vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }
}
