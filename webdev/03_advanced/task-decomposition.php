<?php
$page_title = '複雑なタスクの分解術 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'ai-deep';
$section_name = '第1部：AI駆動開発の深化';
$step_number = 3;
$total_steps = 36;
$extra_styles = '
        .code-block {
            background: #1e293b;
            color: #e2e8f0;
        }
        .prompt-box {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border-left: 4px solid #f59e0b;
        }';

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">複雑なタスクの分解術</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">大きな機能を「丸投げ」してもAIは困ってしまいます。複雑なタスクを適切に分解し、順序立てて依頼することで、高品質なコードを効率的に生成できます。</p>
        </div>

        <!-- なぜ分解が必要か -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">なぜタスク分解が必要なのか</h2>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-red-50 p-4 rounded-lg">
                    <h3 class="font-bold text-red-700 mb-2">丸投げの問題点</h3>
                    <ul class="text-sm space-y-2 text-red-600">
                        <li>✗ AIが全体像を把握しきれない</li>
                        <li>✗ 中間成果物の確認ができない</li>
                        <li>✗ 問題が起きた時に原因特定が困難</li>
                        <li>✗ 出力が長すぎて途中で切れる</li>
                        <li>✗ 品質にばらつきが出る</li>
                    </ul>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-bold text-green-700 mb-2">分解のメリット</h3>
                    <ul class="text-sm space-y-2 text-green-600">
                        <li>○ 各ステップで品質を確認できる</li>
                        <li>○ 問題があればすぐ修正できる</li>
                        <li>○ AIが集中して高品質な出力を生成</li>
                        <li>○ 進捗が可視化される</li>
                        <li>○ 学習・理解が深まる</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 分解の基本原則 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">タスク分解の基本原則</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-3">1. 依存関係を意識する</h3>
                    <p class="text-sm text-gray-600 mb-3">後続のタスクが必要とするものを先に作る</p>
                    <div class="bg-gray-50 p-4 rounded text-sm">
                        <div class="font-mono">
                            データベースモデル → API → フロントエンドUI<br>
                            型定義 → ユーティリティ関数 → コンポーネント<br>
                            設定ファイル → 初期化処理 → メイン機能
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-3">2. テスト可能な単位で区切る</h3>
                    <p class="text-sm text-gray-600 mb-3">各ステップの完了を確認できるようにする</p>
                    <div class="bg-gray-50 p-4 rounded text-sm">
                        <div class="font-mono">
                            ✗ 「認証機能を作って」（完了の判断が曖昧）<br>
                            ○ 「ログインAPIを作って、curl で動作確認できるようにして」
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-3">3. 1タスク = 1関心事</h3>
                    <p class="text-sm text-gray-600 mb-3">複数の異なる関心事を混ぜない</p>
                    <div class="bg-gray-50 p-4 rounded text-sm">
                        <div class="font-mono">
                            ✗ 「ユーザー登録とメール送信と管理画面を作って」<br>
                            ○ 「ユーザー登録APIを作って」→「メール送信機能を追加して」→...
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 実践的な分解パターン -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">実践的な分解パターン</h2>

            <h3 class="text-xl font-bold mb-4">パターン1：レイヤー別分解（フルスタック機能）</h3>
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <p class="text-sm text-gray-600 mb-4">新機能を追加する際の王道パターン</p>
                <div class="space-y-2">
                    <div class="flex items-center p-2 bg-blue-50 rounded">
                        <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded mr-3">Step 1</span>
                        <span class="text-sm">データベースモデル・マイグレーション</span>
                    </div>
                    <div class="flex items-center p-2 bg-blue-50 rounded">
                        <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded mr-3">Step 2</span>
                        <span class="text-sm">Pydantic スキーマ（リクエスト/レスポンス）</span>
                    </div>
                    <div class="flex items-center p-2 bg-blue-50 rounded">
                        <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded mr-3">Step 3</span>
                        <span class="text-sm">サービス層（ビジネスロジック）</span>
                    </div>
                    <div class="flex items-center p-2 bg-blue-50 rounded">
                        <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded mr-3">Step 4</span>
                        <span class="text-sm">APIエンドポイント</span>
                    </div>
                    <div class="flex items-center p-2 bg-green-50 rounded">
                        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded mr-3">Step 5</span>
                        <span class="text-sm">APIクライアント（フロントエンド）</span>
                    </div>
                    <div class="flex items-center p-2 bg-green-50 rounded">
                        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded mr-3">Step 6</span>
                        <span class="text-sm">UIコンポーネント</span>
                    </div>
                    <div class="flex items-center p-2 bg-green-50 rounded">
                        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded mr-3">Step 7</span>
                        <span class="text-sm">ページ統合・ルーティング</span>
                    </div>
                </div>
            </div>

            <h3 class="text-xl font-bold mb-4">パターン2：CRUD別分解</h3>
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <p class="text-sm text-gray-600 mb-4">データ操作機能を段階的に追加</p>
                <div class="grid md:grid-cols-4 gap-2">
                    <div class="p-3 bg-gray-50 rounded text-center">
                        <div class="font-bold text-green-600">Create</div>
                        <div class="text-xs">新規作成機能</div>
                    </div>
                    <div class="p-3 bg-gray-50 rounded text-center">
                        <div class="font-bold text-blue-600">Read</div>
                        <div class="text-xs">一覧・詳細表示</div>
                    </div>
                    <div class="p-3 bg-gray-50 rounded text-center">
                        <div class="font-bold text-yellow-600">Update</div>
                        <div class="text-xs">編集機能</div>
                    </div>
                    <div class="p-3 bg-gray-50 rounded text-center">
                        <div class="font-bold text-red-600">Delete</div>
                        <div class="text-xs">削除機能</div>
                    </div>
                </div>
            </div>

            <h3 class="text-xl font-bold mb-4">パターン3：ハッピーパス → エッジケース</h3>
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <p class="text-sm text-gray-600 mb-4">まず正常系を完成させ、その後で異常系を追加</p>
                <div class="space-y-2">
                    <div class="p-2 bg-green-50 rounded text-sm">
                        <span class="font-bold">Phase 1:</span> 正常系のみで動く最小実装
                    </div>
                    <div class="p-2 bg-yellow-50 rounded text-sm">
                        <span class="font-bold">Phase 2:</span> バリデーション追加
                    </div>
                    <div class="p-2 bg-orange-50 rounded text-sm">
                        <span class="font-bold">Phase 3:</span> エラーハンドリング追加
                    </div>
                    <div class="p-2 bg-red-50 rounded text-sm">
                        <span class="font-bold">Phase 4:</span> エッジケース対応
                    </div>
                </div>
            </div>
        </section>

        <!-- AIへの分解依頼 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIに分解を手伝ってもらう</h2>

            <p class="mb-4">タスクの分解自体をAIに相談できます。</p>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">分解を依頼するプロンプト</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下の機能を実装したいです。実装の順序を教えてください。

【機能】
プロジェクト管理ツールに「タスクのコメント機能」を追加したい

【要件】
- タスクにコメントを追加できる
- コメントの編集・削除ができる（投稿者のみ）
- コメントにはメンション機能がある（@ユーザー名）
- メンションされたユーザーに通知が届く

【技術スタック】
- Backend: FastAPI + SQLAlchemy + MySQL
- Frontend: Next.js + TypeScript

【質問】
1. どのような順序で実装すべきですか？
2. 各ステップで作成するファイルは何ですか？
3. 各ステップの完了確認はどうすればいいですか？</pre>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                <p><strong>AIの回答を受けて：</strong>提案された分解を確認し、納得できたら「では Step 1 から始めてください」と進めます。調整が必要なら「Step 2 と 3 は同時にやって」など修正を指示します。</p>
            </div>
        </section>

        <!-- 実践例 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">実践例：コメント機能の分解</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded mr-3 mt-1">1</span>
                        <div>
                            <h4 class="font-bold">Comment モデルとマイグレーション</h4>
                            <p class="text-sm text-gray-600">「backend/app/models/comment.py を作成。task_id, user_id, content, created_at, updated_at。マイグレーションも実行して」</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded mr-3 mt-1">2</span>
                        <div>
                            <h4 class="font-bold">コメントCRUD API</h4>
                            <p class="text-sm text-gray-600">「POST/GET/PUT/DELETE の基本APIを作成。Swagger UIで動作確認できるようにして」</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded mr-3 mt-1">3</span>
                        <div>
                            <h4 class="font-bold">フロントエンドのコメント表示</h4>
                            <p class="text-sm text-gray-600">「タスク詳細画面にコメント一覧を表示。APIから取得して表示するだけでOK」</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded mr-3 mt-1">4</span>
                        <div>
                            <h4 class="font-bold">コメント投稿フォーム</h4>
                            <p class="text-sm text-gray-600">「コメント入力欄と送信ボタンを追加。投稿後は一覧を更新」</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded mr-3 mt-1">5</span>
                        <div>
                            <h4 class="font-bold">編集・削除機能</h4>
                            <p class="text-sm text-gray-600">「自分のコメントに編集・削除ボタンを表示。モーダルまたはインライン編集で」</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded mr-3 mt-1">6</span>
                        <div>
                            <h4 class="font-bold">メンション機能</h4>
                            <p class="text-sm text-gray-600">「@を入力したらユーザー候補を表示。選択したらリンクとして保存」</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded mr-3 mt-1">7</span>
                        <div>
                            <h4 class="font-bold">通知機能</h4>
                            <p class="text-sm text-gray-600">「メンションされたユーザーに通知を作成。通知一覧画面も追加」</p>
                        </div>
                    </div>
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
                        <span><strong>丸投げは避ける</strong> - 大きなタスクを一度に依頼しない</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>依存関係を意識</strong> - 後続タスクが必要とするものを先に作る</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>テスト可能な単位で</strong> - 各ステップの完了を確認できるようにする</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>分解パターンを活用</strong> - レイヤー別、CRUD別、ハッピーパス優先など</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>AIに分解を相談</strong> - 分解自体もAIに手伝ってもらえる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-agent.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                AIエージェントの活用
            </a>
            <a href="ai-verification.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：AIの出力を検証する
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
