### やること
- 動的計画法
    - 基本例題（Flog）
        - 貰うDPと配るDP
    - ナップサック問題
    - 編集距離
    - 区間分割の仕方を最適化

### 感想
- 動的計画法は無駄を省いた全探索
- DPだと思ったら以下の2つを考える
    - 状態（最適解 = dp[i]） - 頂点（グラフでイメージする）
    - 遷移（dp[i]を出すための処理） - 矢印（グラフでイメージする）


**貰うDP**

前の要素からdp[i]を求める

<img src="https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.amazonaws.com%2F0%2F182963%2F11df76c6-0e37-1864-1283-10b725ec040d.jpeg?ixlib=rb-4.0.0&auto=format&gif-q=60&q=75&w=1400&fit=max&s=f7575c5248f4c6253728a935971d6223" width="300">

**配るDP**

dp[i]からdp[i + 1]とdp[i + 2]を求める

<img src="https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.amazonaws.com%2F0%2F182963%2F34996fb1-55a3-4ccb-19e3-7ca5bb3654bd.jpeg?ixlib=rb-4.0.0&auto=format&gif-q=60&q=75&w=1400&fit=max&s=7b049c12b17de2748fe4dad141c35427" width="300">

### 練習になる問題一覧（AtCoder参照）
- [Educational DP Contest / DP まとめコンテスト](https://atcoder.jp/contests/dp)
    - [x] A - Frog 1

### 参考になる資料
- https://www.youtube.com/watch?v=Ce8fWxzgi9Y