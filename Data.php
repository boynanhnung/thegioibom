<?php

class Data
{
    const TYPE_HCP = 'hcp';
    const TYPE_LY_TAM = 'ly-tam';
    const PRODUCTS = [
        [
            'id' => 1,
            'name' => 'Máy bơm nước thải sạch HCP PUMP Đài Loan A-AN F-FN',
            'price' => 2860000,
            'image' => './Picture/a-an.png',
            'detail' => './chitietsanpham/maybomhcp/a-an.f-fn.html',
            'type' => self::TYPE_HCP,
        ],
        [
            'id' => 2,
            'name' => 'Máy bơm nước thải áp cao HCP PUMP AL',
            'price' => 4900000,
            'image' => './Picture/al.png',
            'detail' => './chitietsanpham/maybomhcp/a-an.f-fn.html',
            'type' => self::TYPE_HCP,
        ],
        [
            'id' => 3,
            'name' => 'Máy bơm cánh cắt rác HCP PUMP GF',
            'price' => 5730000,
            'image' => './Picture/gf.png',
            'detail' => './chitietsanpham/maybomhcp/a-an.f-fn.html',
            'type' => self::TYPE_HCP,
        ],
        [
            'id' => 4,
            'name' => 'Máy bơm nước thải Đài Loan thông dụng AF',
            'price' => 28600,
            'image' => './Picture/af.png',
            'detail' => './chitietsanpham/maybomhcp/a-an.f-fn.html',
            'type' => self::TYPE_HCP,
        ],
        [
            'id' => 5,
            'name' => 'Máy bơm nước thải sạch HCP PUMP Đài Loan A-AN F-FN',
            'price' => 28600,
            'image' => './Picture/grs.png',
            'detail' => './chitietsanpham/maybomhcp/a-an.f-fn.html',
            'type' => self::TYPE_HCP,
        ],
        [
            'id' => 6,
            'name' => 'Máy bơm nước thải sạch HCP PUMP Đài Loan A-AN F-FN',
            'price' => 28600,
            'image' => './Picture/grs.png',
            'detail' => './chitietsanpham/maybomhcp/a-an.f-fn.html',
            'type' => self::TYPE_HCP,
        ],
        [
            'id' => 7,
            'name' => 'Máy bơm nước thải sạch HCP PUMP Đài Loan A-AN F-FN',
            'price' => 28600,
            'image' => './Picture/grs.png',
            'detail' => './chitietsanpham/maybomhcp/a-an.f-fn.html',
            'type' => self::TYPE_HCP,
        ],
        [
            'id' => 8,
            'name' => 'Máy bơm nước thải sạch HCP PUMP Đài Loan A-AN F-FN',
            'price' => 28600,
            'image' => './Picture/grs.png',
            'detail' => './chitietsanpham/maybomhcp/a-an.f-fn.html',
            'type' => self::TYPE_HCP,
        ],
    ];

    public static function getProductsByType(string $type, $limit = 0): array
    {
        $data = [];
        $count = 0;
        foreach (self::PRODUCTS as $product) {
            if ($product['type'] === $type) {
                $data[] = $product;
                $count++;
            }

            if ($limit && $limit === $count) {
                break;
            }
        }
        return $data;
    }
}