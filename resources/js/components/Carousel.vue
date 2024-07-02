<template>
    <div class="product-list">
        <div v-for="(product, index) in products" :key="index" class="product-item bg-white">
            <div class="row no-gutters align-items-center h-100">
                <div class="col-md-6">
                    <img :src="product.image" class="img-fluid" :alt="product.name" width="80%">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">{{ product.name }}</h5>
                        <!-- TABS -->
                        <nav class="pt-3">
                            <div class="nav nav-underline" id="nav-tab" role="tablist">
                                <button class="nav-link active uppercase" id="nav-description-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-description" type="button" role="tab"
                                    aria-controls="nav-description" aria-selected="true">
                                    description
                                </button>
                                <button class="nav-link uppercase" id="nav-features-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-features" type="button" role="tab" aria-controls="nav-features"
                                    aria-selected="false">
                                    features
                                </button>
                                <button class="nav-link uppercase" id="nav-dimensions-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-dimensions" type="button" role="tab"
                                    aria-controls="nav-dimensions" aria-selected="false">
                                    dimensions
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content pb-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                aria-labelledby="nav-description-tab" tabindex="0">
                                <p class="card-text pt-3">
                                    {{ product.description }}
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-features" role="tabpanel"
                                aria-labelledby="nav-features-tab" tabindex="0">
                            </div>
                            <div class="tab-pane fade" id="nav-dimensions" role="tabpanel"
                                aria-labelledby="nav-dimensions-tab" tabindex="0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="card-text pt-1">
                                    <strong>{{ product.price }}</strong>
                                </p>
                            </div>
                            <div class="col">
                                <a :href="product.link" class="btn btn-primary uppercase button-color pull-left"
                                style="width: 100px;">buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        $(".product-list").slick({
            arrows: true,
            dots: true,
            slidesToShow: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ]
        });
    },
    data() {
        return {
            products: [
                {
                    name: "Product 1",
                    description: "Description for product 1",
                    features: "Product 1 features",
                    dimensions: "20x50x120",
                    price:"$499.99",
                    image: "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ4XJjjd8A3wg8tpUTROtjd7f-VndTAho-2_bP7fEryowHyF9r8",
                    link: "#",
                },
                {
                    name: "Product 2",
                    description: "Description for product 2",
                    features: "Product 2 features",
                    dimensions: "30x50x140",
                    price:"$699.99",
                    image: "https://cdn.shopify.com/s/files/1/0411/9757/products/EASY-RIDER-SURFBOARD-AQUA-RAIL-_EPOXY_2048x.jpg?v=1640827548",
                    link: "#",
                },
                {
                    name: "Product 3",
                    description: "Description for product 3",
                    features: "Product 3 features",
                    dimensions: "40x40x150",
                    price:"$399.99",
                    image: "https://cynthiarowley.com/cdn/shop/products/surfboard.jpg?v=1657742313",
                    link: "#",
                },
                {
                    name: "Product 4",
                    description: "Description for product 4",
                    features: "Product 4 features",
                    dimensions: "20x80x180",
                    price:"$595.99",
                    image: "https://via.placeholder.com/300",
                    link: "#",
                },
            ],
        };
    },
};
</script>
