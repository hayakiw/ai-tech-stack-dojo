<?php
$page_title = '広告×AI - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 13;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">広告×AI</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">Web広告はすぐに効果が出るマーケティング手法。AIを活用すれば、効果的な広告文や複数のバリエーションを素早く作成できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">Web広告の種類</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="text-2xl mr-3">🔍</span>
                        <h3 class="font-bold text-lg">リスティング広告（検索広告）</h3>
                    </div>
                    <p class="text-gray-600 mb-2">Google/Yahoo検索結果に表示されるテキスト広告</p>
                    <div class="bg-gray-50 p-3 rounded text-sm">
                        <span class="text-teal-600 font-bold">AIの活用：</span> 広告見出し、説明文の作成、キーワード提案
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="text-2xl mr-3">📱</span>
                        <h3 class="font-bold text-lg">SNS広告</h3>
                    </div>
                    <p class="text-gray-600 mb-2">Instagram、Facebook、X、TikTokなどに表示される広告</p>
                    <div class="bg-gray-50 p-3 rounded text-sm">
                        <span class="text-teal-600 font-bold">AIの活用：</span> 広告コピー、ターゲティング案、クリエイティブ案
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="text-2xl mr-3">🖼️</span>
                        <h3 class="font-bold text-lg">ディスプレイ広告</h3>
                    </div>
                    <p class="text-gray-600 mb-2">Webサイト上に表示されるバナー広告</p>
                    <div class="bg-gray-50 p-3 rounded text-sm">
                        <span class="text-teal-600 font-bold">AIの活用：</span> キャッチコピー、CTAボタンのテキスト
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIでリスティング広告を作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">Google広告の構成</h3>
                <div class="bg-gray-50 p-4 rounded mb-4">
                    <p class="text-sm"><span class="font-bold">見出し1</span>（30文字以内）| <span class="font-bold">見出し2</span>（30文字以内）| <span class="font-bold">見出し3</span>（30文字以内）</p>
                    <p class="text-sm text-gray-600 mt-2">説明文（90文字以内）× 2つ</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">広告文生成プロンプト</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">Google広告のレスポンシブ検索広告を作成してください。

【商品】オンライン英会話サービス
【価格】月額9,800円（初月無料）
【特徴】
・24時間予約可能
・ネイティブ講師
・ビジネス英語特化

【狙うキーワード】オンライン英会話 ビジネス
【ターゲット】30代会社員、英語を仕事で使いたい

以下を作成してください：
・見出し（30文字以内）× 15パターン
・説明文（90文字以内）× 4パターン

見出しは以下のカテゴリでバリエーションを：
- ブランド名・サービス名
- 特徴・メリット
- 価格・オファー
- 行動喚起（CTA）
- 数字を使った訴求</pre>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIでSNS広告を作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">Instagram/Facebook広告</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">Instagram広告用のコピーを作成してください。

【商品】ダイエットサプリメント
【価格】初回限定1,980円（通常3,980円）
【ターゲット】
・30-40代女性
・産後ダイエットに悩んでいる
・運動する時間がない

【広告の目的】LP誘導→購入

以下を作成してください：
1. プライマリテキスト（本文）125文字以内 × 3パターン
2. 見出し 40文字以内 × 3パターン
3. CTAボタンの推奨（「詳しくはこちら」「購入する」など）

訴求軸：
- パターン1：悩み共感型
- パターン2：ベネフィット訴求型
- パターン3：限定オファー型</pre>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">広告運用のAI活用</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">📊 A/Bテストの設計</h4>
                    <p class="text-sm text-gray-600">AIに複数パターンを作らせ、どの訴求が効果的か検証</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">🎯 ターゲティング提案</h4>
                    <p class="text-sm text-gray-600">ペルソナからターゲティング設定を提案させる</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">📈 レポート分析</h4>
                    <p class="text-sm text-gray-600">広告データをAIに分析させ、改善点を発見</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">🔄 リフレッシュ</h4>
                    <p class="text-sm text-gray-600">効果が落ちた広告の新バージョンをAIで作成</p>
                </div>
            </div>
        </section>

        <!-- セクション5 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">広告運用の注意点</h2>

            <div class="space-y-4">
                <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">審査ポリシーに注意</h4>
                        <p class="text-sm text-gray-600">各プラットフォームには広告審査があります。誇大表現、禁止ワード、不適切な表現は審査に通りません。</p>
                    </div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">景品表示法を遵守</h4>
                        <p class="text-sm text-gray-600">「No.1」「最安」などの表現には根拠が必要。AIが生成した誇大表現に注意。</p>
                    </div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">少額からテスト</h4>
                        <p class="text-sm text-gray-600">最初は少額で複数パターンをテストし、効果の高いものに予算を集中。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">まとめ</h2>
            <div class="bg-teal-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIで広告文の複数バリエーションを素早く作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>リスティング、SNS広告それぞれの形式に合わせる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>A/Bテストで効果を検証しながら改善</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>審査ポリシーと法規制に注意</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="email-marketing.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：メール×AI
            </a>
            <a href="mistakes.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：よくある失敗と対策
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
