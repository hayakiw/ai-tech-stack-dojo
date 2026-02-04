<?php
$page_title = 'メール×AI - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 12;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">メール×AI</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">メールマーケティングは最も費用対効果の高い施策の一つ。AIを使えば、開封される件名や読まれる本文を効率的に作成できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">メールマーケティングの基本</h2>

            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📧</span>
                    <h4 class="font-bold mt-2 mb-1">メルマガ</h4>
                    <p class="text-sm text-gray-600">定期的な情報発信で関係性を維持</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🔔</span>
                    <h4 class="font-bold mt-2 mb-1">ステップメール</h4>
                    <p class="text-sm text-gray-600">登録後に自動で送られる一連のメール</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🛒</span>
                    <h4 class="font-bold mt-2 mb-1">カート放棄メール</h4>
                    <p class="text-sm text-gray-600">購入を完了しなかった人へのリマインド</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🎉</span>
                    <h4 class="font-bold mt-2 mb-1">キャンペーンメール</h4>
                    <p class="text-sm text-gray-600">セールや新商品のお知らせ</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">重要な指標</h3>
                <div class="grid md:grid-cols-3 gap-4 text-sm">
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-bold text-teal-600">開封率</span>
                        <p class="text-gray-600">メールを開いた人の割合（目安：15-25%）</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-bold text-teal-600">クリック率</span>
                        <p class="text-gray-600">リンクをクリックした割合（目安：2-5%）</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-bold text-teal-600">配信停止率</span>
                        <p class="text-gray-600">登録解除した割合（目安：0.5%以下）</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIで件名を最適化</h2>

            <p class="mb-4">メールの開封率は件名で決まります。AIに複数パターンを作らせて、効果的な件名を見つけましょう。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">件名生成プロンプト</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の条件でメルマガの件名を10パターン作成してください。

【メールの目的】春のセール告知（最大50%OFF）
【ターゲット】過去に購入したことがある女性顧客
【商品】レディースファッション
【配信時期】3月中旬

以下の観点でバリエーションを出してください：
1. 緊急性を出す（2パターン）
2. 好奇心を刺激する（2パターン）
3. ベネフィットを強調（2パターン）
4. パーソナライズ感（2パターン）
5. 数字を使う（2パターン）

各件名は30文字以内でお願いします。</pre>
                </div>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="font-bold mb-2 text-sm">AIの出力例：</h4>
                <ul class="text-sm space-y-1">
                    <li>・「【本日まで】春物50%OFFは今日で終了です」</li>
                    <li>・「〇〇様だけにお知らせしたいことが」</li>
                    <li>・「この春、3,000円で叶う新しい私」</li>
                    <li>・「え、これも半額？人気アイテム厳選リスト」</li>
                </ul>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIでメール本文を作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">メルマガ本文プロンプト</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の条件でメルマガを作成してください。

【目的】春のセール告知
【内容】
・セール期間：3/15-3/31
・割引率：最大50%OFF
・対象商品：春物全品
・特典：5,000円以上で送料無料

【ターゲット】既存顧客（女性）
【トーン】親しみやすく、でも押し売り感なく

構成：
1. 季節の挨拶（短く）
2. セールの概要
3. おすすめ商品3点の紹介
4. 購入への導線（CTA）
5. P.S.（追伸で限定感を出す）

500文字程度でお願いします。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-teal-600">ステップメール設計</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">オンライン英会話サービスの無料登録者向けに
5通のステップメールを設計してください。

【目的】無料体験から有料プランへの誘導
【ターゲット】英語学習に興味がある社会人

各メールについて以下を提案してください：
・配信タイミング（登録後○日目）
・件名
・目的
・本文の概要（200字程度）
・CTA</pre>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">メールマーケティングのコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">📝 件名をA/Bテスト</h4>
                    <p class="text-sm text-gray-600">AIで複数の件名を作り、一部の読者でテストして効果の高い方を本配信</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">👤 パーソナライズ</h4>
                    <p class="text-sm text-gray-600">名前や過去の購入履歴を活用して、個人に合わせた内容に</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">⏰ 配信時間を最適化</h4>
                    <p class="text-sm text-gray-600">B2Bは平日午前、B2Cは夜や週末が開封されやすい傾向</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">📱 モバイル最適化</h4>
                    <p class="text-sm text-gray-600">メールの50%以上はスマホで開封。短く、読みやすく</p>
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
                        <span>件名が開封率を決める。AIで複数パターンを作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>本文は目的・ターゲット・トーンを明確に指示</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>ステップメールの設計もAIに任せられる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>A/Bテストとパーソナライズで効果を高める</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="seo-ai.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：SEO×AI
            </a>
            <a href="ad-ai.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：広告×AI
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
