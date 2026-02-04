<?php
$page_title = 'AIデザインツール - AI×デザイン | AI Tech Stack';
$current_page = 'ai-skills';
$section_name = '第2部：AI×デザインスキル';
$step_number = 5;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIデザインツール</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">Gemini、Canva AI、Adobe Fireflyなど、AIを活用したデザインツールが続々登場。これらを使いこなせば、デザインの効率が劇的に向上します。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">主要なAIデザインツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">✨</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">Google Gemini</h3>
                            <p class="text-gray-600 mt-2">デザインのアイデア出し、配色提案、コピーライティング、画像生成まで幅広くサポート。</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                                <strong>できること：</strong>
                                <ul class="mt-1 space-y-1 text-gray-600">
                                    <li>・デザインコンセプトの提案</li>
                                    <li>・配色やレイアウトのアドバイス</li>
                                    <li>・キャッチコピー・文章作成</li>
                                    <li>・画像生成（Gemini Advanced）</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🎨</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">Canva AI（Magic Studio）</h3>
                            <p class="text-gray-600 mt-2">Canva内蔵のAI機能群。テキストから画像生成、背景削除、デザイン自動生成など。</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                                <strong>主な機能：</strong>
                                <ul class="mt-1 space-y-1 text-gray-600">
                                    <li>・Magic Design：説明からデザイン自動生成</li>
                                    <li>・Magic Edit：画像の一部をAIで編集</li>
                                    <li>・Magic Eraser：不要な要素を削除</li>
                                    <li>・Magic Write：文章やコピーを生成</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🔥</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">Adobe Firefly</h3>
                            <p class="text-gray-600 mt-2">Adobeの生成AI。商用利用可能で安心。Photoshop等と連携。</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                                <strong>主な機能：</strong>
                                <ul class="mt-1 space-y-1 text-gray-600">
                                    <li>・テキストから画像生成</li>
                                    <li>・生成塗りつぶし（画像の一部を生成）</li>
                                    <li>・テキストエフェクト</li>
                                    <li>・ベクター生成</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">Geminiをデザインに活用</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">デザインコンセプトを考えてもらう</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">カフェのオープン告知チラシを作りたいです。

【店舗情報】
・店名：Coffee Garden
・コンセプト：緑に囲まれた癒しの空間
・ターゲット：20-40代女性

以下を提案してください：
1. デザインコンセプト
2. 配色（HEXコード付き）
3. 使用するイメージや素材のアイデア
4. キャッチコピー案（3つ）
5. レイアウトの方向性</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">デザインのフィードバックをもらう</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のバナーデザインを改善したいです。

【現状】
・サイズ：1200x628px（OGP用）
・要素：商品写真、キャッチコピー、ロゴ、CTAボタン
・問題：ごちゃごちゃしていて目立たない

デザインの4原則（近接・整列・反復・コントラスト）の観点から
改善点とアドバイスをください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIツール活用のコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">具体的に指示する</h4>
                    <p class="text-sm text-gray-600">「かっこいいデザイン」より「ミニマルでモノトーンのモダンなデザイン」と伝える</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">参考例を示す</h4>
                    <p class="text-sm text-gray-600">「Appleのような」「無印良品のような」とイメージを伝える</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">複数案を生成</h4>
                    <p class="text-sm text-gray-600">1回で完璧を求めず、複数パターンを生成して選ぶ</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">組み合わせて使う</h4>
                    <p class="text-sm text-gray-600">Geminiでアイデア出し→Canvaで制作→Geminiでフィードバック</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">まとめ</h2>
            <div class="bg-fuchsia-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>Gemini：アイデア出し、配色提案、フィードバック</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>Canva AI：デザイン自動生成、画像編集</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>Adobe Firefly：商用可能な画像生成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>具体的に指示し、複数パターンを生成</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="design-tools.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：デザインツール紹介
            </a>
            <a href="ai-image-generation.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：AI画像生成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
