# CLAUDE.md

このファイルは、Claude Code (claude.ai/code) がこのリポジトリで作業する際のガイダンスを提供します。

## プロジェクト概要

AI Tech Stack Dojo - AI活用スキルを学べる総合教育プラットフォーム。PHPとTailwind CSS（CDN経由）で構築。コンテンツはすべて日本語。

## 開発コマンド

```bash
# PHP開発サーバーを起動
php -S localhost:8000
```

ビルドツール、パッケージマネージャー、リンターは未導入。静的PHPサイト。

## アーキテクチャ

### テンプレートパターン
各ページは以下の統一構造に従う：
```php
<?php
$page_title = 'ページタイトル';
$current_page = 'section_id';  // ヘッダーナビゲーションのハイライト用
$section_name = 'Part X: セクション名';
$step_number = 1;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>
<!-- コンテンツ -->
<?php include 'includes/footer.php'; ?>
```

### ディレクトリ構成
- 各講座はトップレベルディレクトリを持つ（webdev/, hp/, design/, marketing/, sales/, process-auto/, bi/, training/, sidejob/）
- 各講座には`includes/`サブフォルダがあり、header.php, footer.php, progress.phpテンプレートを格納
- グローバルmetaタグは`/includes/meta.php`
- メインランディングページはルートの`index.php`

### 講座構成
webdev講座のみ3レベル構成（01_beginner/, 02_intermediate/, 03_advanced/）。他の講座はレッスンファイルを直接配置。

### スタイリング
- Tailwind CSS（CDN経由：`https://cdn.tailwindcss.com`）
- 各講座はheader.phpで独自のグラデーションカラーを定義
- モバイルファーストのレスポンシブデザイン

## コンテンツ追加方法

### 既存講座に新規レッスンを追加
1. 既存のレッスンファイルをテンプレートとしてコピー
2. フロントマター変数を更新（$page_title, $current_page, $section_name, $step_number）
3. 講座のincludes/footer.phpにナビゲーションリンクを追加

### 新規講座を追加
1. ルートレベルに新規ディレクトリを作成
2. `includes/`サブフォルダを作成し、header.php, footer.php, progress.phpを配置（既存講座からコピー）
3. 新しいheader.phpで独自のグラデーションカラーを定義
4. メインのindex.phpに講座カードを追加
