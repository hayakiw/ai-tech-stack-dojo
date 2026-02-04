<?php
$page_title = 'コピーライティング×AI - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 10;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">コピーライティング×AI</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">売れるコピーを書くのはプロの仕事…でしたが、AIを使えば初心者でも効果的なコピーを作成できます。基本の型とAI活用法を学びましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">コピーライティングの基本</h2>

            <p class="mb-4">良いコピーには「型」があります。まずは基本の型を覚えましょう。</p>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-3 text-teal-600">AIDA（アイーダ）の法則</h3>
                    <div class="grid md:grid-cols-4 gap-4">
                        <div class="bg-teal-50 p-3 rounded text-center">
                            <span class="font-bold text-teal-600 text-xl">A</span>
                            <p class="text-sm font-bold">Attention</p>
                            <p class="text-xs text-gray-600">注意を引く</p>
                        </div>
                        <div class="bg-teal-100 p-3 rounded text-center">
                            <span class="font-bold text-teal-600 text-xl">I</span>
                            <p class="text-sm font-bold">Interest</p>
                            <p class="text-xs text-gray-600">興味を持たせる</p>
                        </div>
                        <div class="bg-teal-200 p-3 rounded text-center">
                            <span class="font-bold text-teal-700 text-xl">D</span>
                            <p class="text-sm font-bold">Desire</p>
                            <p class="text-xs text-gray-600">欲求を刺激</p>
                        </div>
                        <div class="bg-teal-300 p-3 rounded text-center">
                            <span class="font-bold text-teal-700 text-xl">A</span>
                            <p class="text-sm font-bold">Action</p>
                            <p class="text-xs text-gray-600">行動を促す</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-3 text-teal-600">PAS（パス）の法則</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="bg-red-50 p-3 rounded text-center">
                            <span class="font-bold text-red-600 text-xl">P</span>
                            <p class="text-sm font-bold">Problem</p>
                            <p class="text-xs text-gray-600">問題提起</p>
                        </div>
                        <div class="bg-yellow-50 p-3 rounded text-center">
                            <span class="font-bold text-yellow-600 text-xl">A</span>
                            <p class="text-sm font-bold">Agitate</p>
                            <p class="text-xs text-gray-600">問題を深掘り</p>
                        </div>
                        <div class="bg-green-50 p-3 rounded text-center">
                            <span class="font-bold text-green-600 text-xl">S</span>
                            <p class="text-sm font-bold">Solution</p>
                            <p class="text-xs text-gray-600">解決策を提示</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIでキャッチコピーを作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">基本のプロンプト</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">あなたはベテランのコピーライターです。
以下の商品のキャッチコピーを10パターン作成してください。

【商品】オーガニック化粧水
【価格】3,980円
【特徴】
・100%天然由来成分
・敏感肌でも使える
・保湿力が高い

【ターゲット】
・30代女性
・肌荒れに悩んでいる
・自然派コスメに興味がある

【使用場面】Web広告、LP

以下の観点でバリエーションを出してください：
1. 悩み訴求（2パターン）
2. ベネフィット訴求（2パターン）
3. 信頼性訴求（2パターン）
4. 感情訴求（2パターン）
5. 数字を使った訴求（2パターン）</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">AIの出力例</h3>
                <div class="space-y-3">
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="text-xs text-teal-600 font-bold">悩み訴求</span>
                        <p class="mt-1">「肌荒れループから、そろそろ抜け出しませんか？」</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="text-xs text-teal-600 font-bold">ベネフィット訴求</span>
                        <p class="mt-1">「素肌が、自信になる。」</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="text-xs text-teal-600 font-bold">信頼性訴求</span>
                        <p class="mt-1">「皮膚科医も認めた、やさしさ処方。」</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="text-xs text-teal-600 font-bold">数字訴求</span>
                        <p class="mt-1">「使用者の92%が「また使いたい」と回答」</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">LP（ランディングページ）のコピー</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">LP構成をAIに作らせる</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の商品のLPの構成案とコピーを作成してください。

【商品】プログラミングスクール
【価格】月額29,800円
【特徴】
・完全オンライン
・現役エンジニアがマンツーマン指導
・転職保証付き

【ターゲット】
・20-30代の会社員
・IT業界への転職を考えている
・未経験からエンジニアになりたい

AIDA+の法則に従って、以下のセクションの見出しと本文を作成してください：
1. ファーストビュー（キャッチコピー + サブコピー）
2. 問題提起セクション
3. 解決策の提示
4. 商品の特徴（3つ）
5. お客様の声
6. よくある質問（3つ）
7. CTA（行動喚起）</pre>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">コピーを磨くAI活用術</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">🔄 複数パターンを出させる</h4>
                    <p class="text-sm text-gray-600">「10パターン作成して」と指示し、良いものをピックアップ</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">✨ 方向性を指定して修正</h4>
                    <p class="text-sm text-gray-600">「もっとカジュアルに」「数字を入れて」など具体的にフィードバック</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">🎯 ターゲットを変えてみる</h4>
                    <p class="text-sm text-gray-600">同じ商品でもターゲット違いで複数バージョンを作成</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">📝 競合のコピーを分析</h4>
                    <p class="text-sm text-gray-600">AIに競合のコピーを分析させ、差別化ポイントを見つける</p>
                </div>
            </div>
        </section>

        <!-- セクション5 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">注意点</h2>

            <div class="space-y-4">
                <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">誇大表現に注意</h4>
                        <p class="text-sm text-gray-600">AIは「No.1」「絶対」などの誇大表現を使うことがあります。景品表示法に抵触しないか確認しましょう。</p>
                    </div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">事実確認を忘れずに</h4>
                        <p class="text-sm text-gray-600">数字や効果についての記載は、根拠があるかどうか必ず確認してください。</p>
                    </div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">最終編集は人間が</h4>
                        <p class="text-sm text-gray-600">AIの出力をそのまま使わず、自社のトーンに合わせて編集しましょう。</p>
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
                        <span>AIDA、PASなどの型を理解してAIに指示する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>複数パターンを出させて選ぶのが効率的</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>フィードバックで方向性を調整</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>誇大表現や事実確認は必ず人間がチェック</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="sns-marketing.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：SNS×AI
            </a>
            <a href="seo-ai.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：SEO×AI
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
