<?php
$page_title = '大規模プロジェクトでのAI活用 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'ai-deep';
$section_name = '第1部：AI駆動開発の深化';
$step_number = 1;
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
        <h1 class="text-4xl font-bold mb-8">大規模プロジェクトでのAI活用</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">ファイル数が数十〜数百になる大規模プロジェクトでも、AIを効果的に活用できます。鍵は「コンテキスト管理」と「適切な情報提供」です。</p>
        </div>

        <!-- 大規模プロジェクトの課題 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">大規模プロジェクトでAIを使う際の課題</h2>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-red-600 mb-3">よくある問題</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>AIがプロジェクト全体を把握できない</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>関連ファイルを見落として不整合が発生</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>既存のコーディング規約を無視した提案</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>コンテキストが長すぎて処理が遅い</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-green-600 mb-3">解決のアプローチ</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">○</span>
                            <span>必要な情報を選択的に提供する</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">○</span>
                            <span>プロジェクト構造を先に説明する</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">○</span>
                            <span>規約やパターンを明示する</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">○</span>
                            <span>タスクを小さく分割する</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- コンテキスト管理 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">効果的なコンテキスト管理</h2>

            <h3 class="text-xl font-bold mb-4">1. プロジェクト構造を最初に共有する</h3>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示例</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>このプロジェクトの構造を説明します：

project/
├── frontend/          # Next.js アプリ
│   ├── src/
│   │   ├── components/  # 共通コンポーネント
│   │   ├── features/    # 機能別モジュール
│   │   ├── hooks/       # カスタムフック
│   │   └── lib/         # ユーティリティ
│   └── ...
├── backend/           # FastAPI アプリ
│   ├── app/
│   │   ├── api/        # エンドポイント
│   │   ├── models/     # DBモデル
│   │   ├── schemas/    # Pydanticスキーマ
│   │   └── services/   # ビジネスロジック
│   └── ...
└── docker-compose.yml

今から frontend/src/features/tasks/ にタスク管理機能を追加します。</pre>
                </div>
            </div>

            <h3 class="text-xl font-bold mb-4">2. 関連ファイルを明示的に伝える</h3>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示例</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>タスク機能を実装します。以下のファイルが関連します：

【参照すべきファイル】
- backend/app/models/user.py（既存のUserモデル）
- backend/app/api/auth.py（認証の実装パターン）
- frontend/src/features/auth/（既存機能の構造参考）

【新規作成するファイル】
- backend/app/models/task.py
- backend/app/api/tasks.py
- frontend/src/features/tasks/

既存のパターンに合わせて実装してください。</pre>
                </div>
            </div>

            <h3 class="text-xl font-bold mb-4">3. 規約・パターンを明示する</h3>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示例</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>このプロジェクトのコーディング規約：

【バックエンド（Python/FastAPI）】
- 型ヒントを必ず使用
- Pydanticスキーマで入出力を定義
- サービス層にビジネスロジックを分離
- 例外は HTTPException で統一

【フロントエンド（TypeScript/Next.js）】
- コンポーネントは関数コンポーネント + TypeScript
- 状態管理は useState + useReducer（Reduxは使わない）
- APIコールは features/*/api.ts に集約
- スタイルは Tailwind CSS

この規約に従ってコードを書いてください。</pre>
                </div>
            </div>
        </section>

        <!-- Claude Code / Cursor の活用 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Claude Code / Cursor での実践</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-purple-600 mb-4">Claude Code の場合</h3>
                <p class="mb-4">Claude Code は自動的にプロジェクト構造を把握しますが、明示的に指示することで精度が上がります。</p>

                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-4">
<pre># プロジェクトのルートで実行
claude

# 最初に構造を確認させる
> このプロジェクトの構造を確認して、主要なファイルを教えて

# 特定のディレクトリに集中させる
> backend/app/api/ 以下のファイルを見て、エンドポイントの実装パターンを把握して</pre>
                </div>

                <div class="bg-purple-50 p-4 rounded">
                    <p class="text-sm"><strong>Tips:</strong> <code>@ファイル名</code> でファイルを明示的に参照できます。<code>@backend/app/models/user.py</code> のように指定すると、そのファイルを確実にコンテキストに含められます。</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-blue-600 mb-4">Cursor の場合</h3>
                <p class="mb-4">Cursor では <code>.cursorrules</code> ファイルでプロジェクト固有の設定を定義できます。</p>

                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-4">
<pre># .cursorrules
You are working on a full-stack web application.

## Project Structure
- Frontend: Next.js 14 with App Router (frontend/)
- Backend: FastAPI with SQLAlchemy (backend/)
- Database: MySQL

## Coding Standards
- Use TypeScript strict mode
- All API responses follow { data, error, message } format
- Use Pydantic for validation
- Follow existing patterns in the codebase

## Important Files
- backend/app/core/config.py - Configuration
- frontend/src/lib/api.ts - API client</pre>
                </div>

                <div class="bg-blue-50 p-4 rounded">
                    <p class="text-sm"><strong>Tips:</strong> Cmd+K（Ctrl+K）で編集、Cmd+L（Ctrl+L）でチャット。<code>@codebase</code> でプロジェクト全体を検索対象にできます。</p>
                </div>
            </div>
        </section>

        <!-- 段階的な実装 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">段階的な実装アプローチ</h2>

            <p class="mb-4">大きな機能を一度に実装しようとすると、AIの出力が不安定になります。段階的に進めましょう。</p>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">1</div>
                    <div>
                        <h4 class="font-bold">Step 1: 設計を確認</h4>
                        <p class="text-sm text-gray-600">「この機能を実装するのに、どのファイルを作成・修正する必要がありますか？」</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">2</div>
                    <div>
                        <h4 class="font-bold">Step 2: モデル/スキーマから</h4>
                        <p class="text-sm text-gray-600">「まずデータベースモデルとPydanticスキーマを作成してください」</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">3</div>
                    <div>
                        <h4 class="font-bold">Step 3: API実装</h4>
                        <p class="text-sm text-gray-600">「モデルができたので、CRUDのAPIエンドポイントを作成してください」</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">4</div>
                    <div>
                        <h4 class="font-bold">Step 4: フロントエンド</h4>
                        <p class="text-sm text-gray-600">「APIができたので、フロントエンドのコンポーネントを作成してください」</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">5</div>
                    <div>
                        <h4 class="font-bold">Step 5: 動作確認と修正</h4>
                        <p class="text-sm text-gray-600">「エラーが出ました：[エラー内容]。修正してください」</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 実践例 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">実践例：タスク管理機能の追加</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">完全な指示例</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>【背景】
既存のプロジェクト管理アプリにタスク機能を追加します。

【プロジェクト構造】
- backend/app/models/user.py に User モデルあり
- backend/app/api/auth.py に認証済みユーザー取得の依存関係あり
- frontend/src/features/projects/ が既存機能の参考

【要件】
- タスクには title, description, status, due_date, assigned_to がある
- status は todo, in_progress, done の3種類
- タスクはプロジェクトに紐づく（project_id）
- 認証済みユーザーのみ操作可能

【お願い】
1. まず必要なファイル一覧を提示してください
2. 承認後、backend から順に実装してください
3. 既存の auth.py, projects.py のパターンに従ってください</pre>
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
                        <span><strong>構造を最初に共有</strong> - プロジェクトの全体像をAIに伝える</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>関連ファイルを明示</strong> - 参照すべきファイル、新規作成するファイルを列挙</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>規約を伝える</strong> - コーディングスタイル、使用パターンを明示</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>段階的に進める</strong> - 一度に全部ではなく、ステップごとに実装</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>ツールの機能を活用</strong> - @ファイル参照、.cursorrules などを活用</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="index.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                トップページ
            </a>
            <a href="ai-agent.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：AIエージェントの活用
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
