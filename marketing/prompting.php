<?php
$page_title = 'プロンプト術 - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'tools';
$section_name = '第2部：AIツールの活用';
$step_number = 7;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">プロンプト術</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">AIから望む回答を引き出すコツは「プロンプト（指示文）」にあります。良いプロンプトを書けば、AIの出力品質が劇的に向上します。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">プロンプトの基本構造</h2>

            <p class="mb-4">効果的なプロンプトには以下の要素を含めます。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-teal-500 text-white px-3 py-1 rounded font-bold mr-3 text-sm">1</span>
                        <div>
                            <h4 class="font-bold">役割を与える</h4>
                            <p class="text-sm text-gray-600">「あなたはプロのコピーライターです」</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-teal-500 text-white px-3 py-1 rounded font-bold mr-3 text-sm">2</span>
                        <div>
                            <h4 class="font-bold">背景情報を伝える</h4>
                            <p class="text-sm text-gray-600">「月額9,800円のオンライン英会話サービスの広告を作ります」</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-teal-500 text-white px-3 py-1 rounded font-bold mr-3 text-sm">3</span>
                        <div>
                            <h4 class="font-bold">具体的なタスクを指示</h4>
                            <p class="text-sm text-gray-600">「30代ビジネスパーソン向けのキャッチコピーを5つ作成してください」</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-teal-500 text-white px-3 py-1 rounded font-bold mr-3 text-sm">4</span>
                        <div>
                            <h4 class="font-bold">出力形式を指定</h4>
                            <p class="text-sm text-gray-600">「各コピーには簡単な解説もつけてください」</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-teal-500 text-white px-3 py-1 rounded font-bold mr-3 text-sm">5</span>
                        <div>
                            <h4 class="font-bold">制約条件を加える</h4>
                            <p class="text-sm text-gray-600">「20文字以内で、カタカナ語は最小限に」</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">良いプロンプト vs 悪いプロンプト</h2>

            <div class="space-y-6">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-red-50 p-4 rounded-lg">
                        <h4 class="font-bold text-red-600 mb-2">❌ 悪い例</h4>
                        <div class="bg-white p-3 rounded text-sm">
                            「キャッチコピー作って」
                        </div>
                        <p class="text-sm text-gray-600 mt-2">→ 何の商品？誰向け？どんなトーン？</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h4 class="font-bold text-green-600 mb-2">✅ 良い例</h4>
                        <div class="bg-white p-3 rounded text-sm">
                            「忙しい30代ビジネスパーソン向けのオンライン英会話サービスのキャッチコピーを5つ作成してください。「時間がない」という悩みに響く内容で、20文字以内でお願いします」
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-red-50 p-4 rounded-lg">
                        <h4 class="font-bold text-red-600 mb-2">❌ 悪い例</h4>
                        <div class="bg-white p-3 rounded text-sm">
                            「SNSの投稿文を書いて」
                        </div>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h4 class="font-bold text-green-600 mb-2">✅ 良い例</h4>
                        <div class="bg-white p-3 rounded text-sm">
                            「Instagram用の投稿文を書いてください。【商品】手作りクッキー専門店【目的】新商品告知【ターゲット】20代女性【トーン】親しみやすく、可愛らしい【ハッシュタグ】5つ含める」
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">マーケティング用プロンプトテンプレート</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">📝 コピーライティング用</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">あなたはベテランのコピーライターです。

【商品/サービス】
（商品名と概要を記入）

【ターゲット】
（年齢、職業、悩みなどを記入）

【目的】
（認知向上/購入促進/資料請求など）

【トーン】
（カジュアル/フォーマル/親しみやすいなど）

【制約】
・文字数：○文字以内
・含めたいキーワード：○○
・NGワード：○○

上記の条件で、キャッチコピーを5パターン作成してください。
それぞれに簡単な解説もつけてください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">📱 SNS投稿用</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の条件でSNS投稿文を作成してください。

【プラットフォーム】Instagram / X / Facebook
【投稿目的】（新商品告知/キャンペーン告知/日常投稿など）
【商品/トピック】（内容を記入）
【ターゲット】（誰に届けたいか）
【トーン】（堅め/カジュアル/ユーモアありなど）
【絵文字】使う/使わない
【ハッシュタグ】○個含める

投稿文に加えて、投稿に適した時間帯と理由も教えてください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">📧 メルマガ用</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">メールマガジンの原稿を作成してください。

【件名のパターン】3つ提案
【本文の目的】（セール告知/新商品案内/コラムなど）
【読者層】（既存顧客/見込み客など）
【本文の長さ】（○文字程度）
【CTA（行動喚起）】（購入/詳細を見る/予約するなど）

開封率を上げるための件名と、
クリック率を上げるための本文構成を意識してください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">プロンプトを改善するコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">具体的な数字を入れる</h4>
                    <p class="text-sm text-gray-600">「いくつか」→「5つ」「3パターン」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">例を示す</h4>
                    <p class="text-sm text-gray-600">「こんな感じで：〇〇」と参考例を提示</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">段階的に依頼する</h4>
                    <p class="text-sm text-gray-600">まず構成案→次に本文、と分けて依頼</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-teal-600 mb-2">フィードバックする</h4>
                    <p class="text-sm text-gray-600">「もっと短く」「2番目を軸に展開して」</p>
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
                        <span>役割・背景・タスク・形式・制約を明確に</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>具体的であるほど良い回答が得られる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>テンプレートを活用して効率化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>フィードバックで回答を改善していく</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="chatgpt-basics.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ChatGPT/Claudeの基本
            </a>
            <a href="data-analysis.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：データ分析×AI
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
