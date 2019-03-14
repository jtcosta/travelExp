FROM liuchong/rustup
ENV ROCKET_ADDRESS=0.0.0.0
ENV ROCKET_PORT=3001
LABEL "traefik.frontend.rule"="Host:profile.localhost"
LABEL "traefik.port"="3001"
LABEL "traefik.docker.network"="traefik_webgateway"
LABEL "traefik.frontend.passHostHeader"="true"
LABEL "traefik.enable"="true"
ADD api/profile /app
WORKDIR /app
RUN rustup default nightly
RUN cargo build
CMD ["cargo","run"]