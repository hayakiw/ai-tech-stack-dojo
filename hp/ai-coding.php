<?php
$page_title = 'AIでコーディング支援 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'tools';
$section_name = '第2部：AIツールの活用';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIでコーディング支援</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">AIを使えば、HTML/CSSのコーディングを大幅にスピードアップ。デザインを伝えるだけで、コードを自動生成してくれます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIコーディングの流れ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4">1</div>
                        <div>
                            <h4 class="font-bold">デザインを言葉で説明</h4>
                            <p class="text-sm text-gray-600">作りたいUIの特徴を具体的に伝える</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4">2</div>
                        <div>
                            <h4 class="font-bold">AIがコードを生成</h4>
                            <p class="text-sm text-gray-600">HTML/CSS（Tailwind）のコードを出力</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4">3</div>
                        <div>
                            <h4 class="font-bold">確認・調整</h4>
                            <p class="text-sm text-gray-600">プレビューして、必要に応じて修正を依頼</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4">4</div>
                        <div>
                            <h4 class="font-bold">完成</h4>
                            <p class="text-sm text-gray-600">コードをコピーしてプロジェクトに使用</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">実践：コンポーネントを作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">ヘッダーを作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                        <pre class="whitespace-pre-wrap">以下の仕様でヘッダーを作成してください。Tailwind CSSを使用。

【仕様】
・固定ヘッダー（スクロールで追従）
・左にロゴ（テキストで「MyPortfolio」）
・右にナビゲーション（ホーム、実績、スキル、お問い合わせ）
・背景：白、影付き
・スマホ時はハンバーガーメニュー

レスポンシブ対応でお願いします。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">カードコンポーネントを作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                        <pre class="whitespace-pre-wrap">実績紹介用のカードを作成してください。

【仕様】
・画像エリア（16:9比率）
・タイトル（太字、大きめ）
・説明文（2行まで、超過は...で省略）
・タグ（複数表示、青色のバッジ）
・ホバー時に少し浮き上がるアニメーション
・角丸、影付き

Tailwind CSSで実装してください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">お問い合わせフォームを作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">お問い合わせフォームを作成してください。

【項目】
・お名前（必須）
・メールアドレス（必須）
・会社名（任意）
・お問い合わせ種別（ドロップダウン：相談、見積もり依頼、その他）
・メッセージ（テキストエリア、必須）
・送信ボタン

【デザイン】
・シンプルでモダン
・必須項目には*マーク
・フォーカス時に枠線が青に変化
・送信ボタンは目立つ色</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">コード修正のコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">具体的に指示する</h4>
                    <p class="text-sm text-gray-600">「もっと大きく」→「font-sizeを24pxに」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">参考画像を使う</h4>
                    <p class="text-sm text-gray-600">スクリーンショットをアップロードして「これに近づけて」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">段階的に修正</h4>
                    <p class="text-sm text-gray-600">一度に多くの修正を頼まない</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">良い例を見せる</h4>
                    <p class="text-sm text-gray-600">「このサイトのようなデザインで」とURL共有</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>デザインを言葉で説明してコードを生成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>具体的な仕様を伝えるほど精度が上がる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>修正は段階的に、具体的に依頼</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>参考画像やURLがあると精度アップ</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-design.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIでデザインを効率化
            </a>
            <a href="ai-images.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：AIで画像生成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
