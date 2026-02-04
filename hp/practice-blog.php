<?php
$page_title = 'ブログサイト制作 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践サイト制作';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ブログサイト制作</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">ブログは情報発信の基盤。SEOで集客し、ファンを増やすための重要なツールです。AIでデザインから記事作成まで効率化しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ブログサイトの構成</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🏠</span>
                    <h4 class="font-bold mt-2 mb-1">トップページ</h4>
                    <p class="text-sm text-gray-600">最新記事一覧、人気記事、カテゴリー</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📝</span>
                    <h4 class="font-bold mt-2 mb-1">記事ページ</h4>
                    <p class="text-sm text-gray-600">本文、目次、関連記事、シェアボタン</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📁</span>
                    <h4 class="font-bold mt-2 mb-1">カテゴリーページ</h4>
                    <p class="text-sm text-gray-600">カテゴリー別の記事一覧</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">👤</span>
                    <h4 class="font-bold mt-2 mb-1">プロフィール</h4>
                    <p class="text-sm text-gray-600">運営者情報、SNSリンク</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIでブログデザインを作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">記事一覧（カード型）</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">ブログの記事一覧をカード型で作成してください。

【カードの内容】
・サムネイル画像（16:9）
・カテゴリータグ
・記事タイトル（2行まで、超過は省略）
・投稿日
・抜粋（3行まで）

【レイアウト】
・PCで3カラム、タブレットで2カラム、スマホで1カラム
・ホバーで影が強くなるエフェクト

ダミーデータ6件分でお願いします。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">記事ページのレイアウト</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">ブログ記事ページのレイアウトを作成してください。

【メインコンテンツ】
・記事タイトル（h1）
・投稿日、カテゴリー、読了時間
・アイキャッチ画像
・本文エリア（prose形式）
・目次（h2の見出しから自動生成を想定）
・著者プロフィール
・関連記事

【サイドバー（PC時のみ表示）】
・プロフィールウィジェット
・人気記事
・カテゴリー一覧

Tailwind CSS + @tailwindcss/typography でお願いします。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ブログ記事もAIで作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">記事の下書きを生成</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下のテーマでブログ記事を作成してください。

【テーマ】初心者向けWebデザインの始め方
【想定読者】Webデザインに興味がある未経験者
【文字数】2000文字程度
【構成】
- 導入（フックと記事の概要）
- 本文（見出し3〜5個）
- まとめ

SEOを意識して、見出しにはキーワードを含めてください。</pre>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>注意：</strong>AIの出力はそのまま使わず、自分の経験や独自の視点を加えて編集しましょう。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>トップ、記事ページ、カテゴリーが基本構成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>カード型の記事一覧が見やすい</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>記事の下書きもAIで効率化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>AI出力は必ず編集してオリジナリティを追加</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="practice-lp.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：LP制作
            </a>
            <a href="publish.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：公開と運用
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
