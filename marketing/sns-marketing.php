<?php
$page_title = 'SNS×AI - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 9;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">SNS×AI</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">SNSマーケティングはAIとの相性抜群。投稿文の作成からコンテンツ企画まで、AIを活用して効率的にSNS運用を行いましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">プラットフォーム別の特徴</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="text-2xl mr-3">𝕏</span>
                        <h3 class="font-bold text-lg">X（Twitter）</h3>
                    </div>
                    <div class="grid md:grid-cols-3 gap-4 text-sm">
                        <div>
                            <p class="font-bold text-gray-600 mb-1">特徴</p>
                            <p>リアルタイム性、拡散力、文字制限140字</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-600 mb-1">向いている内容</p>
                            <p>速報、意見、日常、トレンド乗り</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-600 mb-1">AIの活用</p>
                            <p>短文コピー、ハッシュタグ、スレッド構成</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="text-2xl mr-3">📷</span>
                        <h3 class="font-bold text-lg">Instagram</h3>
                    </div>
                    <div class="grid md:grid-cols-3 gap-4 text-sm">
                        <div>
                            <p class="font-bold text-gray-600 mb-1">特徴</p>
                            <p>ビジュアル重視、発見タブ、リール</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-600 mb-1">向いている内容</p>
                            <p>商品紹介、ライフスタイル、How-to</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-600 mb-1">AIの活用</p>
                            <p>キャプション、ハッシュタグ、投稿計画</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="text-2xl mr-3">🎵</span>
                        <h3 class="font-bold text-lg">TikTok</h3>
                    </div>
                    <div class="grid md:grid-cols-3 gap-4 text-sm">
                        <div>
                            <p class="font-bold text-gray-600 mb-1">特徴</p>
                            <p>ショート動画、アルゴリズム重視、若年層</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-600 mb-1">向いている内容</p>
                            <p>エンタメ、ハウツー、チャレンジ</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-600 mb-1">AIの活用</p>
                            <p>動画構成、台本、トレンド調査</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIでSNS投稿を作成する</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">X（Twitter）投稿の例</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                        <p class="text-teal-400 mb-2">プロンプト：</p>
                        <pre class="whitespace-pre-wrap">以下の内容でX（Twitter）用の投稿を5パターン作成してください。

【商品】時短料理の電子レンジ調理器
【ターゲット】忙しい共働き世帯
【目的】商品の認知向上
【トーン】親しみやすく、共感を呼ぶ
【制約】
・140字以内
・絵文字は2-3個
・ハッシュタグ2-3個

バズりやすい要素（共感、驚き、有益情報）を含めてください。</pre>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <p class="text-teal-600 mb-2 font-bold text-sm">AIの回答例：</p>
                        <p class="text-sm">「仕事から帰って料理する気力がない」って時、これ1つで解決した🍳✨ レンジに入れて5分放置するだけで、ちゃんとした夕飯ができる。もっと早く買えばよかった… #時短家電 #共働き夫婦</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">Instagram投稿の例</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                        <p class="text-teal-400 mb-2">プロンプト：</p>
                        <pre class="whitespace-pre-wrap">Instagram用の投稿キャプションを作成してください。

【投稿画像】手作りクッキーの写真
【アカウント】小さなクッキー専門店
【目的】新商品「抹茶クッキー」の告知
【ターゲット】20-30代女性、お菓子好き
【トーン】温かみがあり、可愛らしい

以下を含めてください：
・商品の魅力
・期間限定であること
・CTA（行動喚起）
・ハッシュタグ10個</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">SNSコンテンツ企画をAIで</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">1週間の投稿計画を作成</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の条件で1週間分のSNS投稿計画を作成してください。

【アカウント】オンライン英会話サービス
【プラットフォーム】Instagram
【投稿頻度】1日1投稿
【目的】ブランド認知 + 無料体験への誘導
【ターゲット】英語学習に興味がある20-30代

各投稿について以下を提案してください：
・曜日と投稿時間
・投稿テーマ
・投稿タイプ（フィード/リール/ストーリー）
・簡単なキャプション案
・想定エンゲージメント（高/中/低）</pre>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>ポイント：</strong>AIに投稿計画を立ててもらったら、自社のリソースや過去の反応を踏まえて調整しましょう。</p>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">SNS運用のコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">📅 投稿時間を意識</h4>
                    <p class="text-sm text-gray-600">ターゲットがアクティブな時間帯に投稿。一般的には朝7-8時、昼12-13時、夜20-22時が狙い目</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">🔄 継続が大事</h4>
                    <p class="text-sm text-gray-600">SNSは継続が命。AIを使って投稿作成を効率化し、無理なく続けられる体制を作る</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">💬 コミュニケーション</h4>
                    <p class="text-sm text-gray-600">一方通行ではなく、コメントやDMには丁寧に返信。AIに返信案を考えてもらうことも可能</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">📊 分析と改善</h4>
                    <p class="text-sm text-gray-600">反応の良かった投稿を分析し、次に活かす。AIに分析を手伝ってもらおう</p>
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
                        <span>プラットフォームごとの特徴を理解して投稿を作り分ける</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIで投稿文、ハッシュタグ、投稿計画を効率的に作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>継続的な投稿とコミュニケーションが重要</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>データを分析して改善を繰り返す</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="data-analysis.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：データ分析×AI
            </a>
            <a href="copywriting.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：コピーライティング×AI
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
