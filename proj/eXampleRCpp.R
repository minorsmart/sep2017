f <- function(n) {
  if(n < 2) return(n)
  return(f(n-1) + f(n-2))
}

sapply(1:10, f)

library(Rcpp)

cppFunction("int g(int n) {
  if(n < 2) return(n);
  return(g(n-1) + g(n-2));
}")

sapply(1:10, g)

library(rbenchmark)

benchmark(f(30), g(30), order = "relative")
