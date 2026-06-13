# Music School Website

Web制作会社案件を想定した、音楽スクールの架空サイトです。

## 概要

デザインカンプをもとに、コーディングからWordPressオリジナルテーマ化まで一貫して実装しました。

### 制作範囲

* HTML / SCSS（Sass）
* JavaScript / jQuery
* WordPressオリジナルテーマ化
* レスポンシブ対応
* BEMによるCSS設計
* ACF実装
* カスタム投稿タイプ実装
* テンプレート共通化

## ページ構成

全7ページ

* トップページ
* 料金
* ブログ一覧
* ブログ
* 卒業実績一覧
* 卒業実績
* お問い合わせ

## WordPress実装内容

### カスタム投稿タイプ

* お知らせ

### ACF

管理画面から以下の項目を更新可能です。

* MV画像
* コース情報
* 講師情報
* CTAエリア
* お知らせ情報

### テンプレート設計

* header.php
* footer.php
* front-page.php
* archive-news.php
* single-news.php
* page.php

共通パーツをテンプレート化し、保守性を考慮した構成としています。

## CSS設計

BEMを採用し、コンポーネント単位で管理しています。

例：

```scss
.p-course {}
.p-course__item {}
.p-course__title {}
```

## レスポンシブ対応

スマートフォン・タブレット・PCに対応しています。

## パフォーマンス

* 画像の最適化
* 適切なHTMLマークアップ
* 不要なコードの削減
* Lighthouseを意識した実装

## 開発環境

* Visual Studio Code
* WordPress
* Sass
* Git / GitHub

## URL

* Demo：
* GitHub：
