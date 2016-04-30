
HClust.2 <- hclust(dist(model.matrix(~-1 + Attnd+Fem+Finan+Grad+Teams+Violat+Win, Athletic)) , method= "ward")
plot(HClust.2, main= "Cluster Dendrogram for Solution HClust.2", xlab= "Observation Number in Data Set Athletic", 
  sub="Method=ward; Distance=euclidian")
HClust.3 <- hclust(dist(model.matrix(~-1 + Attnd+Fem+Finan+Grad+Teams+Violat+Win, Athletic))^2 , method= "ward")
plot(HClust.3, main= "Cluster Dendrogram for Solution HClust.3", xlab= "Observation Number in Data Set Athletic", 
  sub="Method=ward; Distance=squared-euclidian")
summary(as.factor(cutree(HClust.3, k = 4))) # Cluster Sizes
by(model.matrix(~-1 + Attnd + Fem + Finan + Grad + Teams + Violat + Win, Athletic), as.factor(cutree(HClust.3, k = 4)), colMeans) # Cluster Centroids
bpCent(prcomp(model.matrix(~-1 + Attnd + Fem + Finan + Grad + Teams + Violat + Win, Athletic)), cutree(HClust.3, k = 4), data.pts = TRUE, centroids = 
  TRUE, xlabs = as.character(cutree(HClust.3, k = 4)))
summary(as.factor(cutree(HClust.3, k = 4))) # Cluster Sizes
by(model.matrix(~-1 + Attnd + Fem + Finan + Grad + Teams + Violat + Win, Athletic), as.factor(cutree(HClust.3, k = 4)), colMeans) # Cluster Centroids
bpCent3d(prcomp(model.matrix(~-1 + Attnd + Fem + Finan + Grad + Teams + Violat + Win, Athletic)), cutree(HClust.3, k = 4), data.pts = TRUE, centroids 
  = TRUE, xlabs = as.character(cutree(HClust.3, k = 4)))

