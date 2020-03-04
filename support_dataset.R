# library(RJSONIO)
# m <- data[1,]
# xy.list <- split(m, seq(nrow(m)))
# xy.list <- setNames(split(m, seq(nrow(m))), rownames(m))
# json <- toJSON(xy.list)

rm(list=ls())
path <- file.choose()
data <- read.csv(path)
View(data)
service_data <- data
product_data <- data
service_ret_data <- data

dat <- service_ret_data
dat_encode <- one_hot()