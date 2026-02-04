<?php
$page_title = 'AI自動化テンプレート - AI×業務自動化 | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：AI×自動化ツール';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AI自動化テンプレート</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">すぐに使えるAI自動化のプロンプトテンプレート集。コピーして使えるので、今日から業務効率化を始められます。</p>
        </div>

        <!-- テンプレート1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">メール関連テンプレート</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">返信メール作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のメールへの返信を作成してください。

【受信メール】
{メール本文をここに貼り付け}

【返信のトーン】
・ビジネス向けだが親しみやすく
・丁寧語を使用

【含めるポイント】
・お礼の言葉
・質問への回答
・次のアクションの提案

件名と本文を作成してください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">営業メール作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の条件で営業メールを作成してください。

【ターゲット】{業種・役職}
【提案内容】{サービス/製品名}
【提案のポイント】
・{メリット1}
・{メリット2}
・{メリット3}

【目的】商談のアポイント獲得

件名は開封されやすいものにしてください。
本文は200文字程度で簡潔に。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- テンプレート2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">ドキュメント作成テンプレート</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">議事録作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の会議メモから議事録を作成してください。

【会議名】{会議名}
【日時】{日時}
【参加者】{参加者リスト}
【会議メモ】
{メモ内容}

【議事録フォーマット】
1. 会議概要
2. 決定事項（箇条書き）
3. 討議内容（要点のみ）
4. アクションアイテム（担当者・期限付き）
5. 次回予定</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">週次レポート作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の情報から週次レポートを作成してください。

【報告期間】{期間}
【実績データ】
{数値データ}

【今週のトピック】
{箇条書きでトピックを記載}

【レポート形式】
1. サマリー（3行程度）
2. 数値実績（前週比付き）
3. 成果・ハイライト
4. 課題・リスク
5. 来週の予定</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- テンプレート3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">データ処理テンプレート</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">データ整形・分類</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のデータを整形・分類してください。

【元データ】
{データをここに貼り付け}

【処理内容】
1. データの重複を削除
2. 以下のカテゴリに分類：
   - カテゴリA：{条件}
   - カテゴリB：{条件}
   - カテゴリC：{条件}
3. CSVまたはテーブル形式で出力

【出力項目】
{必要な列名をリスト}</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">情報抽出</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のテキストから必要な情報を抽出してください。

【テキスト】
{抽出元のテキスト}

【抽出する情報】
- 会社名
- 担当者名
- 連絡先（電話/メール）
- 住所
- その他特記事項

表形式で整理して出力してください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- 使い方のコツ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">テンプレート活用のコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">カスタマイズする</h4>
                    <p class="text-sm text-gray-600">テンプレートはベース。自社・自分の業務に合わせて調整しましょう。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">ライブラリ化する</h4>
                    <p class="text-sm text-gray-600">よく使うプロンプトは保存して、いつでも呼び出せるようにしましょう。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">改善を続ける</h4>
                    <p class="text-sm text-gray-600">使ってみて不十分な点があれば、プロンプトを改善していきましょう。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">共有する</h4>
                    <p class="text-sm text-gray-600">チームで使えるテンプレートは共有して、組織全体で効率化。</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">まとめ</h2>
            <div class="bg-violet-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>テンプレートを使えばすぐに自動化を始められる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>自分の業務に合わせてカスタマイズする</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>よく使うプロンプトはライブラリ化して管理</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>チームで共有して組織全体の効率化を図る</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-workflow.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIワークフロー設計
            </a>
            <a href="email-automation.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：メール自動化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
