<?php
$page_title = 'AIエージェントの活用 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'ai-deep';
$section_name = '第1部：AI駆動開発の深化';
$step_number = 2;
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
        <h1 class="text-4xl font-bold mb-8">AIエージェントの活用</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">Claude Code の Plan Mode や Cursor の Agent Mode を使うと、AIが自律的に複数のファイルを編集し、複雑なタスクを完遂できます。効果的な使い方を学びましょう。</p>
        </div>

        <!-- エージェントとは -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIエージェントとは</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">通常のAIとエージェントの違い</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold text-gray-600 mb-2">通常のAI（チャット）</h4>
                        <ul class="text-sm space-y-1">
                            <li>・1回の指示 → 1回の応答</li>
                            <li>・ユーザーが都度確認・実行</li>
                            <li>・ファイル操作は手動</li>
                            <li>・細かい制御が可能</li>
                        </ul>
                    </div>
                    <div class="p-4 bg-orange-50 rounded">
                        <h4 class="font-bold text-orange-600 mb-2">AIエージェント</h4>
                        <ul class="text-sm space-y-1">
                            <li>・1つの目標 → 自律的に複数ステップ実行</li>
                            <li>・AIが計画→実行→確認を繰り返す</li>
                            <li>・ファイル作成・編集を自動実行</li>
                            <li>・効率的だが監視が必要</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Claude Code Plan Mode -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Claude Code の Plan Mode</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-purple-600 mb-4">Plan Mode の起動方法</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-4">
<pre># 方法1: コマンドで起動
claude --plan

# 方法2: チャット中に切り替え
> /plan

# 方法3: 指示の中で依頼
> 以下の機能を実装する計画を立ててください（まだ実行しないで）</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-purple-600 mb-4">Plan Mode の流れ</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-purple-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">1</div>
                        <div>
                            <h4 class="font-bold">計画立案</h4>
                            <p class="text-sm text-gray-600">AIがタスクを分析し、実行計画を提示します</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-purple-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">2</div>
                        <div>
                            <h4 class="font-bold">ユーザー確認</h4>
                            <p class="text-sm text-gray-600">計画を確認し、承認または修正を指示します</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-purple-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">3</div>
                        <div>
                            <h4 class="font-bold">自律実行</h4>
                            <p class="text-sm text-gray-600">承認後、AIが計画に沿って自動的にファイルを編集します</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-purple-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">4</div>
                        <div>
                            <h4 class="font-bold">結果報告</h4>
                            <p class="text-sm text-gray-600">完了後、何を行ったかを報告します</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">Plan Mode 向けの指示例</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>【目標】
プロジェクトにユーザープロフィール機能を追加してください。

【要件】
- プロフィール編集画面（名前、自己紹介、アバター）
- バックエンドAPI（GET /users/me/profile, PUT /users/me/profile）
- アバター画像のアップロード機能

【既存コード】
- backend/app/models/user.py にUserモデルあり
- frontend/src/features/auth/ に認証機能あり

【お願い】
1. まず計画を立ててください
2. 計画を承認したら実行してください
3. 各ステップで何を行ったか報告してください</pre>
                </div>
            </div>
        </section>

        <!-- Cursor Agent Mode -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Cursor の Agent Mode</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-blue-600 mb-4">Agent Mode の起動方法</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-4">
<pre># Composer (Cmd+I / Ctrl+I) を開く
# 右上のドロップダウンで "Agent" を選択

# または、チャットパネルで
# @agent と入力してから指示を書く</pre>
                </div>
                <div class="bg-blue-50 p-4 rounded">
                    <p class="text-sm"><strong>Note:</strong> Agent Mode は複数ファイルの同時編集、ターミナルコマンドの実行、エラーの自動修正などを自律的に行います。</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-blue-600 mb-4">効果的な使い方</h3>
                <div class="space-y-3">
                    <div class="p-3 bg-gray-50 rounded">
                        <span class="font-bold text-green-600">○ 向いているタスク</span>
                        <ul class="text-sm mt-1 space-y-1">
                            <li>・新機能の追加（複数ファイルにまたがる）</li>
                            <li>・リファクタリング（パターンの一括適用）</li>
                            <li>・テストコードの生成</li>
                            <li>・バグ修正（原因調査から修正まで）</li>
                        </ul>
                    </div>
                    <div class="p-3 bg-gray-50 rounded">
                        <span class="font-bold text-red-600">△ 注意が必要なタスク</span>
                        <ul class="text-sm mt-1 space-y-1">
                            <li>・本番環境への操作</li>
                            <li>・機密情報を含むファイルの編集</li>
                            <li>・大規模なデータベース変更</li>
                            <li>・取り消しが難しい操作</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- エージェント活用のコツ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">エージェント活用のコツ</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-green-600 mb-3">1. ゴールを明確に</h3>
                    <p class="text-sm mb-2">曖昧な指示だとAIも迷います。完了条件を明確にしましょう。</p>
                    <div class="text-xs bg-gray-50 p-2 rounded">
                        <span class="text-red-500">✗</span> 「ユーザー機能を良くして」<br>
                        <span class="text-green-500">○</span> 「ユーザーがプロフィール画像を変更できるようにして」
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-green-600 mb-3">2. スコープを限定</h3>
                    <p class="text-sm mb-2">一度に変更する範囲を絞ると、問題が起きても対処しやすいです。</p>
                    <div class="text-xs bg-gray-50 p-2 rounded">
                        <span class="text-red-500">✗</span> 「アプリ全体をリファクタリング」<br>
                        <span class="text-green-500">○</span> 「backend/app/api/ のエラーハンドリングを統一」
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-green-600 mb-3">3. チェックポイントを設ける</h3>
                    <p class="text-sm mb-2">長い作業は中間確認を入れることで、軌道修正しやすくなります。</p>
                    <div class="text-xs bg-gray-50 p-2 rounded">
                        「まずモデルを作成したら一度見せて」<br>
                        「APIができたらテストして結果を報告して」
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-green-600 mb-3">4. Git を活用</h3>
                    <p class="text-sm mb-2">作業前にコミットしておけば、問題が起きても戻せます。</p>
                    <div class="text-xs bg-gray-50 p-2 rounded">
                        「作業前に現状をコミットして」<br>
                        「各機能が完成したらコミットして」
                    </div>
                </div>
            </div>
        </section>

        <!-- 実践例 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">実践例：認証機能の追加</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">エージェントへの完全な指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>【目標】
既存のNext.js + FastAPIアプリにJWT認証を追加してください。

【現状】
- backend/app/models/user.py は未作成
- 認証機能は一切ない状態

【要件】
1. バックエンド
   - User モデル（email, hashed_password, created_at）
   - POST /auth/register（新規登録）
   - POST /auth/login（ログイン、JWTトークン返却）
   - GET /auth/me（現在のユーザー情報）

2. フロントエンド
   - /login ページ
   - /register ページ
   - 認証状態の管理（Context or Zustand）
   - 認証が必要なページの保護

【制約】
- パスワードは bcrypt でハッシュ化
- JWT の有効期限は 24 時間
- 既存の frontend/src/lib/api.ts を使用

【進め方】
1. まず全体の計画を立ててください
2. バックエンドから順に実装
3. 各ステップ完了後に動作確認できるようにしてください
4. 最後に簡単な動作テストを行ってください</pre>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>重要：</strong>エージェントが作業中でも、不安な点があれば「ちょっと待って」と言って確認できます。完全に任せきりにせず、適度に監視しましょう。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>エージェントは自律的に動く</strong> - 計画→実行→確認を自動で行う</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>Claude Code は /plan で起動</strong> - 計画を確認してから実行させる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>Cursor は Agent モードで</strong> - Composer から Agent を選択</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>ゴールとスコープを明確に</strong> - 曖昧な指示は避ける</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>適度に監視する</strong> - 完全に任せきりにしない</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-large-project.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                大規模プロジェクトでのAI活用
            </a>
            <a href="task-decomposition.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：複雑なタスクの分解術
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
