<?php
$page_title = 'AIコードレビュー - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'design';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第6部：品質と効率化';
$step_number = 19;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIコードレビュー</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">AIにコードレビューを依頼することで、バグやセキュリティ問題を早期発見。一人開発でも品質を保てます。</p>
        </div>

        <!-- レビューの依頼方法 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">レビューの依頼方法</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-purple-600">基本的なプロンプト</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のコードをレビューしてください。

[コードを貼り付け]

特に確認してほしい点：
- セキュリティ上の問題
- パフォーマンス
- 可読性
- ベストプラクティスに沿っているか</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4 text-blue-600">詳細なレビュー依頼</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のFastAPIエンドポイントをレビューしてください。

```python
@app.post("/users")
def create_user(user: UserCreate, db: Session = Depends(get_db)):
    db_user = User(email=user.email, password=user.password)
    db.add(db_user)
    db.commit()
    return db_user
```

確認観点：
1. SQLインジェクション対策
2. パスワードの取り扱い
3. エラーハンドリング
4. 入力バリデーション
5. レスポンス形式</pre>
                </div>
            </div>
        </section>

        <!-- よくある指摘 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">よくある指摘パターン</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-red-600">セキュリティ</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-red-50 p-4 rounded">
                            <p class="font-bold text-sm mb-2">問題のあるコード</p>
                            <div class="code-block p-2 rounded font-mono text-xs">
<pre>password=user.password  # 平文保存
query = f"SELECT * FROM users WHERE id = {id}"</pre>
                            </div>
                        </div>
                        <div class="bg-green-50 p-4 rounded">
                            <p class="font-bold text-sm mb-2">改善後</p>
                            <div class="code-block p-2 rounded font-mono text-xs">
<pre>password_hash=hash(user.password)
query = select(User).where(User.id == id)</pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-yellow-600">エラーハンドリング</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-red-50 p-4 rounded">
                            <p class="font-bold text-sm mb-2">問題のあるコード</p>
                            <div class="code-block p-2 rounded font-mono text-xs">
<pre>def get_user(id):
    return db.query(User).first()
    # Noneの場合の考慮なし</pre>
                            </div>
                        </div>
                        <div class="bg-green-50 p-4 rounded">
                            <p class="font-bold text-sm mb-2">改善後</p>
                            <div class="code-block p-2 rounded font-mono text-xs">
<pre>def get_user(id):
    user = db.query(User).first()
    if not user:
        raise HTTPException(404)
    return user</pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-blue-600">パフォーマンス</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-red-50 p-4 rounded">
                            <p class="font-bold text-sm mb-2">問題のあるコード</p>
                            <div class="code-block p-2 rounded font-mono text-xs">
<pre># N+1問題
posts = db.query(Post).all()
for post in posts:
    print(post.author.name)</pre>
                            </div>
                        </div>
                        <div class="bg-green-50 p-4 rounded">
                            <p class="font-bold text-sm mb-2">改善後</p>
                            <div class="code-block p-2 rounded font-mono text-xs">
<pre># Eager Loading
posts = db.query(Post).options(
    joinedload(Post.author)
).all()</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Claude Codeでのレビュー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Claude Code / Cursor でのレビュー</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">ファイル単位のレビュー</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># Claude Code
このファイルをレビューして

# Cursor
Ctrl+K → "Review this file for security issues"</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">変更差分のレビュー</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># Claude Code
git diff をレビューして、問題があれば指摘して

# git diff の出力結果を貼り付けてもOK</pre>
                </div>
            </div>
        </section>

        <!-- レビューチェックリスト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">セルフレビューチェックリスト</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-bold mb-3 text-red-600">セキュリティ</h3>
                        <ul class="text-sm space-y-2">
                            <li>□ パスワードはハッシュ化されているか</li>
                            <li>□ SQLインジェクション対策</li>
                            <li>□ XSS対策</li>
                            <li>□ 認証・認可は正しいか</li>
                            <li>□ 機密情報はログに出ていないか</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-3 text-blue-600">コード品質</h3>
                        <ul class="text-sm space-y-2">
                            <li>□ 命名は分かりやすいか</li>
                            <li>□ 関数は適切な長さか</li>
                            <li>□ 重複コードはないか</li>
                            <li>□ エラーハンドリングは適切か</li>
                            <li>□ 型定義は正しいか</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-3 text-green-600">パフォーマンス</h3>
                        <ul class="text-sm space-y-2">
                            <li>□ N+1クエリはないか</li>
                            <li>□ 無駄なAPI呼び出しはないか</li>
                            <li>□ 適切にキャッシュしているか</li>
                            <li>□ 大きなデータを一度に取得していないか</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-3 text-purple-600">メンテナンス性</h3>
                        <ul class="text-sm space-y-2">
                            <li>□ 必要なコメントはあるか</li>
                            <li>□ マジックナンバーはないか</li>
                            <li>□ テストは書けているか</li>
                            <li>□ 設定値は環境変数化されているか</li>
                        </ul>
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
                        <span>AIにコードレビューを依頼して品質向上</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>セキュリティ、パフォーマンス、可読性を確認</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>チェックリストでセルフレビューも</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>指摘を学びに変えてスキルアップ</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="testing.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                テスト入門
            </a>
            <a href="env-config.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：環境変数と設定
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
